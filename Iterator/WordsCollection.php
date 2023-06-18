<?php

namespace Iterator;

/**
 * Concrete Collections provide one or more methods for getting
 * new iterator instances compatible with the collection class.
 */
class WordsCollection implements \IteratorAggregate
{
    private array $items = [];

    public function getItems()
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getIterator(): Iterator
    {
        return new AlphabeticalOrderIterator($this);
    }

    public function getReverseIterator(): Iterator
    {
        return new AlphabeticalOrderIterator($this, true);
    }
}
