<?php

namespace TemplateMethod;

/**
 * Concrete classes must implement all the abstract operations of the base
 * class. They can also override some implementation-by-implementation operations.
 * by default.
 */
class ConcreteClass1 extends AbstractClass
{
    protected function requiredOperations1(): void
    {
        echo "ConcreteClass1 says: Implemented Operation1\n";
    }

    protected function requiredOperation2(): void
    {
        echo "ConcreteClass1 says: Implemented Operation2\n";
    }
}
