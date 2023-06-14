<?php

namespace Bridge;

/**
 * Abstraction establishes an interface for the "control" part of the two hierarchies
 * classes. It contains a reference to an object from the Implementation hierarchy and delegates
 * him all the real work.
 */
class BridgeAbstraction
{
    protected Implementation $implementation;

    public function __construct(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    public function operation(): string
    {
        return "Abstraction: Base operation with:\n" .
            $this->implementation->operationImplementation();
    }
}
