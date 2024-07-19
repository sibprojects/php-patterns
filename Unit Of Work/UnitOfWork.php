<?php
namespace Doctrine\ORM;

use Exception,
    Doctrine\Common\Collections\ArrayCollection,
    Doctrine\Common\Collections\Collection,
    Doctrine\Common\NotifyPropertyChanged,
    Doctrine\Common\PropertyChangedListener,
    Doctrine\ORM\Event\LifecycleEventArgs,
    Doctrine\ORM\Proxy\Proxy;

/**
 * The UnitOfWork is responsible for tracking changes to objects during an
 * "object-level" transaction and for writing out changes to the database
 * in the correct order.
 *
 * @since       2.0
 * @author      Benjamin Eberlei <kontakt@beberlei.de>
 * @author      Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author      Jonathan Wage <jonwage@gmail.com>
 * @author      Roman Borschel <roman@code-factory.org>
 * @internal    This class contains highly performance-sensitive code.
 */
class UnitOfWork implements PropertyChangedListener
{
    /**
     * An entity is in MANAGED state when its persistence is managed by an EntityManager.
     */
    const STATE_MANAGED = 1;

    /**
     * An entity is new if it has just been instantiated (i.e. using the "new" operator)
     * and is not (yet) managed by an EntityManager.
     */
    const STATE_NEW = 2;

    /**
     * A detached entity is an instance with a persistent identity that is not
     * (or no longer) associated with an EntityManager (and a UnitOfWork).
     */
    const STATE_DETACHED = 3;

    /**
     * A removed entity instance is an instance with a persistent identity,
     * associated with an EntityManager, whose persistent state has been
     * deleted (or is scheduled for deletion).
     */
    const STATE_REMOVED = 4;

    /**
     * Commits the UnitOfWork, executing all operations that have been postponed
     * up to this point. The state of all managed entities will be synchronized with
     * the database.
     * 
     * The operations are executed in the following order:
     * 
     * 1) All entity insertions
     * 2) All entity updates
     * 3) All collection deletions
     * 4) All collection updates
     * 5) All entity deletions
     * 
     */
    public function commit()
    {
        // Compute changes done since last commit.
        $this->computeChangeSets();

        if ( ! ($this->_entityInsertions ||
                $this->_entityDeletions ||
                $this->_entityUpdates ||
                $this->_collectionUpdates ||
                $this->_collectionDeletions ||
                $this->_orphanRemovals)) {
            return; // Nothing to do.
        }

        if ($this->_orphanRemovals) {
            foreach ($this->_orphanRemovals as $orphan) {
                $this->remove($orphan);
            }
        }
        
        // Raise onFlush
        if ($this->_evm->hasListeners(Events::onFlush)) {
            $this->_evm->dispatchEvent(Events::onFlush, new Event\OnFlushEventArgs($this->_em));
        }
        
        // Now we need a commit order to maintain referential integrity
        $commitOrder = $this->_getCommitOrder();

        $conn = $this->_em->getConnection();

        $conn->beginTransaction();
        try {
            if ($this->_entityInsertions) {
                foreach ($commitOrder as $class) {
                    $this->_executeInserts($class);
                }
            }

            if ($this->_entityUpdates) {
                foreach ($commitOrder as $class) {
                    $this->_executeUpdates($class);
                }
            }

            // Extra updates that were requested by persisters.
            if ($this->_extraUpdates) {
                $this->_executeExtraUpdates();
            }

            // Collection deletions (deletions of complete collections)
            foreach ($this->_collectionDeletions as $collectionToDelete) {
                $this->getCollectionPersister($collectionToDelete->getMapping())
                        ->delete($collectionToDelete);
            }
            // Collection updates (deleteRows, updateRows, insertRows)
            foreach ($this->_collectionUpdates as $collectionToUpdate) {
                $this->getCollectionPersister($collectionToUpdate->getMapping())
                        ->update($collectionToUpdate);
            }

            // Entity deletions come last and need to be in reverse commit order
            if ($this->_entityDeletions) {
                for ($count = count($commitOrder), $i = $count - 1; $i >= 0; --$i) {
                    $this->_executeDeletions($commitOrder[$i]);
                }
            }

            $conn->commit();
        } catch (Exception $e) {
            $this->_em->close();
            $conn->rollback();
            throw $e;
        }

        // Take new snapshots from visited collections
        foreach ($this->_visitedCollections as $coll) {
            $coll->takeSnapshot();
        }

        // Clear up
        $this->_entityInsertions =
        $this->_entityUpdates =
        $this->_entityDeletions =
        $this->_extraUpdates =
        $this->_entityChangeSets =
        $this->_collectionUpdates =
        $this->_collectionDeletions =
        $this->_visitedCollections =
        $this->_scheduledForDirtyCheck =
        $this->_orphanRemovals = array();
    }
    
     /**
     * Computes the changes that happened to a single entity.
     *
     * Modifies/populates the following properties:
     *
     * {@link _originalEntityData}
     * If the entity is NEW or MANAGED but not yet fully persisted (only has an id)
     * then it was not fetched from the database and therefore we have no original
     * entity data yet. All of the current entity data is stored as the original entity data.
     *
     * {@link _entityChangeSets}
     * The changes detected on all properties of the entity are stored there.
     * A change is a tuple array where the first entry is the old value and the second
     * entry is the new value of the property. Changesets are used by persisters
     * to INSERT/UPDATE the persistent entity state.
     *
     * {@link _entityUpdates}
     * If the entity is already fully MANAGED (has been fetched from the database before)
     * and any changes to its properties are detected, then a reference to the entity is stored
     * there to mark it for an update.
     *
     * {@link _collectionDeletions}
     * If a PersistentCollection has been de-referenced in a fully MANAGED entity,
     * then this collection is marked for deletion.
     *
     * @param ClassMetadata $class The class descriptor of the entity.
     * @param object $entity The entity for which to compute the changes.
     */
    public function computeChangeSet(Mapping\ClassMetadata $class, $entity)
    {
        // ...
    }

    /**
     * Computes all the changes that have been done to entities and collections
     * since the last commit and stores these changes in the _entityChangeSet map
     * temporarily for access by the persisters, until the UoW commit is finished.
     */
    public function computeChangeSets()
    {
        // ...
    }

    /**
     * Schedules an entity for insertion into the database.
     * If the entity already has an identifier, it will be added to the identity map.
     *
     * @param object $entity The entity to schedule for insertion.
     */
    public function scheduleForInsert($entity)
    {
        $oid = spl_object_hash($entity);

        if (isset($this->_entityUpdates[$oid])) {
            throw new \InvalidArgumentException("Dirty entity can not be scheduled for insertion.");
        }
        if (isset($this->_entityDeletions[$oid])) {
            throw new \InvalidArgumentException("Removed entity can not be scheduled for insertion.");
        }
        if (isset($this->_entityInsertions[$oid])) {
            throw new \InvalidArgumentException("Entity can not be scheduled for insertion twice.");
        }

        $this->_entityInsertions[$oid] = $entity;

        if (isset($this->_entityIdentifiers[$oid])) {
            $this->addToIdentityMap($entity);
        }
    }

    /**
     * Schedules an entity for being updated.
     *
     * @param object $entity The entity to schedule for being updated.
     */
    public function scheduleForUpdate($entity)
    {
        $oid = spl_object_hash($entity);
        if ( ! isset($this->_entityIdentifiers[$oid])) {
            throw new \InvalidArgumentException("Entity has no identity.");
        }
        if (isset($this->_entityDeletions[$oid])) {
            throw new \InvalidArgumentException("Entity is removed.");
        }

        if ( ! isset($this->_entityUpdates[$oid]) && ! isset($this->_entityInsertions[$oid])) {
            $this->_entityUpdates[$oid] = $entity;
        }
    }

    /**
     * INTERNAL:
     * Schedules an entity for deletion.
     * 
     * @param object $entity
     */
    public function scheduleForDelete($entity)
    {
        $oid = spl_object_hash($entity);
        
        if (isset($this->_entityInsertions[$oid])) {
            if ($this->isInIdentityMap($entity)) {
                $this->removeFromIdentityMap($entity);
            }
            unset($this->_entityInsertions[$oid]);
            return; // entity has not been persisted yet, so nothing more to do.
        }

        if ( ! $this->isInIdentityMap($entity)) {
            return; // ignore
        }

        $this->removeFromIdentityMap($entity);

        if (isset($this->_entityUpdates[$oid])) {
            unset($this->_entityUpdates[$oid]);
        }
        if ( ! isset($this->_entityDeletions[$oid])) {
            $this->_entityDeletions[$oid] = $entity;
        }
    }

    /**
     * Checks whether an entity is scheduled for insertion, update or deletion.
     * 
     * @param $entity
     * @return boolean
     */
    public function isEntityScheduled($entity)
    {
        $oid = spl_object_hash($entity);
        return isset($this->_entityInsertions[$oid]) ||
                isset($this->_entityUpdates[$oid]) ||
                isset($this->_entityDeletions[$oid]);
    }

    public function persist($entity)
    {
        $visited = array();
        $this->_doPersist($entity, $visited);
    }

    /**
     * Saves an entity as part of the current unit of work.
     * This method is internally called during save() cascades as it tracks
     * the already visited entities to prevent infinite recursions.
     * 
     * NOTE: This method always considers entities that are not yet known to
     * this UnitOfWork as NEW.
     *
     * @param object $entity The entity to persist.
     * @param array $visited The already visited entities.
     */
    private function _doPersist($entity, array &$visited)
    {
        $oid = spl_object_hash($entity);
        if (isset($visited[$oid])) {
            return; // Prevent infinite recursion
        }

        $visited[$oid] = $entity; // Mark visited

        $class = $this->_em->getClassMetadata(get_class($entity));
        $entityState = $this->getEntityState($entity, self::STATE_NEW);
        
        switch ($entityState) {
            case self::STATE_MANAGED:
                // Nothing to do, except if policy is "deferred explicit"
                if ($class->isChangeTrackingDeferredExplicit()) {
                    $this->scheduleForDirtyCheck($entity);
                }
                break;
            case self::STATE_NEW:
                if (isset($class->lifecycleCallbacks[Events::prePersist])) {
                    $class->invokeLifecycleCallbacks(Events::prePersist, $entity);
                }
                if ($this->_evm->hasListeners(Events::prePersist)) {
                    $this->_evm->dispatchEvent(Events::prePersist, new LifecycleEventArgs($entity, $this->_em));
                }
                
                $idGen = $class->idGenerator;
                if ( ! $idGen->isPostInsertGenerator()) {
                    $idValue = $idGen->generate($this->_em, $entity);
                    if ( ! $idGen instanceof \Doctrine\ORM\Id\AssignedGenerator) {
                        $this->_entityIdentifiers[$oid] = array($class->identifier[0] => $idValue);
                        $class->setIdentifierValues($entity, $idValue);
                    } else {
                        $this->_entityIdentifiers[$oid] = $idValue;
                    }
                }
                $this->_entityStates[$oid] = self::STATE_MANAGED;
                
                $this->scheduleForInsert($entity);
                break;
            case self::STATE_DETACHED:
                throw new \InvalidArgumentException(
                        "Behavior of persist() for a detached entity is not yet defined.");
            case self::STATE_REMOVED:
                // Entity becomes managed again
                if ($this->isScheduledForDelete($entity)) {
                    unset($this->_entityDeletions[$oid]);
                } else {
                    //FIXME: There's more to think of here...
                    $this->scheduleForInsert($entity);
                }
                break;
            default:
                throw ORMException::invalidEntityState($entityState);
        }
        
        $this->_cascadePersist($entity, $visited);
    }

    /**
     * Deletes an entity as part of the current unit of work.
     *
     * @param object $entity The entity to remove.
     */
    public function remove($entity)
    {
        $visited = array();
        $this->_doRemove($entity, $visited);
    }

    /**
     * Deletes an entity as part of the current unit of work.
     *
     * This method is internally called during delete() cascades as it tracks
     * the already visited entities to prevent infinite recursions.
     *
     * @param object $entity The entity to delete.
     * @param array $visited The map of the already visited entities.
     * @throws InvalidArgumentException If the instance is a detached entity.
     */
    private function _doRemove($entity, array &$visited)
    {
        // ...
    }
}