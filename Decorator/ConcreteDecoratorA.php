<?php

namespace Decorator;

/**
 * Concrete Decorators call the wrapped object and change its result in some way.
 */
class ConcreteDecoratorA extends Decorator
{
    /**
     * Decorators can call the parent implementation of an operation instead of
     * to call the wrapped object directly. This approach simplifies expansion
     * decorator classes.
     */
    public function operation(): string
    {
        return "ConcreteDecoratorA(" . parent::operation() . ")";
    }
}
