<?php

namespace Adapter;

/**
 * The adapter makes the interface of the Adapted class compatible with the target
 * interface.
 */
class Adapter extends Target
{
    private Adaptee $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request(): string
    {
        return "Adapter: (TRANSLATED) " . strrev($this->adaptee->specificRequest());
    }
}
