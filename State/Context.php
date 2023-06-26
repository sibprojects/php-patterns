<?php

namespace State;

/**
 * Context defines the interface of interest to clients. He also
 * stores a reference to an instance of the State subclass that displays the current
 * Context state.
 */
class Context
{
    /**
     * Link to the current state of the Context.
     */
    private State $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    /**
     * Context allows you to modify the State object at run time.
     */
    public function transitionTo(State $state): void
    {
        echo "Context: Transition to " . get_class($state) . ".\n";
        $this->state = $state;
        $this->state->setContext($this);
    }

    /**
     * The context delegates some of its behavior to the current State object.
     */
    public function request1(): void
    {
        $this->state->handle1();
    }

    public function request2(): void
    {
        $this->state->handle2();
    }
}
