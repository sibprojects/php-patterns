<?php

namespace State;

/**
 * The base State class declares the methods that all
 * Concrete States and also provides a back reference to the object
 * Context associated with the State. This backlink can be used
 * States to pass the Context to another State.
 */
abstract class State
{
    protected Context $context;

    public function setContext(Context $context)
    {
        $this->context = $context;
    }

    abstract public function handle1(): void;

    abstract public function handle2(): void;
}
