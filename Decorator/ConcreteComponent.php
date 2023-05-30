<?php

namespace Decorator;

/**
 * Concrete Components provide default behavior implementations. Maybe
 * be several variations of these classes.
 */
class ConcreteComponent implements Component
{
    public function operation(): string
    {
        return "ConcreteComponent";
    }
}
