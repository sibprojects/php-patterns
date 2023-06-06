<?php

namespace Flyweight;

/**
 * Lightweight stores a common part of the state (also called internal
 * state) that belongs to several real business objects.
 * Lightweight takes the rest of the state (external state, unique
 * for each object) through its method parameters.
 */
class Flyweight
{
    private $sharedState;

    public function __construct($sharedState)
    {
        $this->sharedState = $sharedState;
    }

    public function operation($uniqueState): void
    {
        $s = json_encode($this->sharedState);
        $u = json_encode($uniqueState);
        echo "Flyweight: Displaying shared ($s) and unique ($u) state.\n";
    }
}
