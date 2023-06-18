<?php

namespace Iterator;

/**
 * Concrete Iterators implement different traversal algorithms. These classes
 * permanently store the current bypass position.
 */
class AlphabeticalOrderIterator implements \Iterator
{
    private WordsCollection $collection;

    /**
     * Stores the current bypass position. An iterator can have
     * lots of other fields to store iteration state, especially when it
     * must work with a specific collection type.
     */
    private int $position = 0;

    /**
     * This variable specifies the direction of the traversal.
     */
    private bool $reverse = false;

    public function __construct($collection, $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    public function rewind()
    {
        $this->position = $this->reverse ?
            count($this->collection->getItems()) - 1 : 0;
    }

    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}
