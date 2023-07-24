<?php

namespace Observer;

/**
 * PHP has several built-in interfaces associated with the pattern
 * Observer.
 *
 * This is what the Publisher interface looks like:
 *
 * @link http://php.net/manual/ru/class.splsubject.php
 *
 *interface SplSubject
 * {
 * // Attaches the observer to the publisher.
 * public function attach(SplObserver $observer);
 *
 * // Detach the observer from the publisher.
 * public function detach(SplObserver $observer);
 *
 * // Notifies all observers of the event.
 * public function notify();
 *}
 *
 * There is also a built-in interface for Observers:
 *
 * @link http://php.net/manual/ru/class.splobserver.php
 *
 *interface SplObserver
 * {
 * public function update(SplSubject $subject);
 *}
 */

/**
 * The publisher owns some important state and notifies observers about it
 * changes.
 */
class Subject implements \SplSubject
{
    /**
     * For convenience, this variable stores the state of the Publisher,
     *required by all subscribers.
     */
    public int $state;

    /**
     * List of subscribers. real life list
     * subscribers can be stored in more detailed form (classified by
     * type of event, etc.)
     */
    private \SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * Subscription management methods.
     */
    public function attach(\SplObserver $observer): void
    {
        echo "Subject: Attached an observer.\n";
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
        echo "Subject: Detached an observer.\n";
    }

    /**
     * Run updates in each subscriber.
     */
    public function notify(): void
    {
        echo "Subject: Notifying observers...\n";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Usually the subscription logic is only part of what the Publisher does. Publishers
     * often contain some important business logic that runs the method
     * notifications whenever something important is about to happen (or after
     * of this).
     */
    public function someBusinessLogic(): void
    {
        echo "\nSubject: I'm doing something important.\n";
        $this->state = rand(0, 10);

        echo "Subject: My state has just changed to: {$this->state}\n";
        $this->notify();
    }
}
