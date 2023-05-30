<?php

namespace Decorator;

/**
 * Decorators can execute their behavior before or after calling the wrapped
 * object.
 */
class ConcreteDecoratorB extends Decorator
{
    public function operation(): string
    {
        return "ConcreteDecoratorB(" . parent::operation() . ")";
    }
}
