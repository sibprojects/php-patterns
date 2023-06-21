<?php

namespace Memento;

/**
 * A particular snapshot contains the infrastructure for storing the state of the Creator.
 */
class ConcreteMemento implements Memento
{
    private $state;

    private $date;

    public function __construct(string $state)
    {
        $this->state = $state;
        $this->date = date('Y-m-d H:i:s');
    }

    /**
     * The Creator uses this method when restoring its state.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * The remaining methods are used by the Guardian to display metadata.
     */
    public function getName(): string
    {
        return $this->date . " / (" . substr($this->state, 0, 9) . "...)";
    }

    public function getDate(): string
    {
        return $this->date;
    }
}
