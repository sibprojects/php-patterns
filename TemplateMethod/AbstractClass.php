<?php

namespace TemplateMethod;

/**
 * An Abstract Class defines a template method containing the skeleton of some
 * an algorithm consisting of calls to (usually) abstract primitive operations.
 *
 * Concrete subclasses must implement these operations, but leave it to itself
 * template method unchanged.
 */
abstract class AbstractClass
{
    /**
     * The template method defines the skeleton of the algorithm.
     */
    final public function templateMethod(): void
    {
        $this->baseOperation1();
        $this->requiredOperations1();
        $this->baseOperation2();
        $this->hook1();
        $this->requiredOperation2();
        $this->baseOperation3();
        $this->hook2();
    }

    /**
     * These operations already have implementations.
     */
    protected function baseOperation1(): void
    {
        echo "AbstractClass says: I am doing the bulk of the work\n";
    }

    protected function baseOperation2(): void
    {
        echo "AbstractClass says: But I let subclasses override some operations\n";
    }

    protected function baseOperation3(): void
    {
        echo "AbstractClass says: But I am doing the bulk of the work anyway\n";
    }

    /**
     * And these operations must be implemented in subclasses.
     */
    abstract protected function requiredOperations1(): void;

    abstract protected function requiredOperation2(): void;

    /**
     * These are hooks. Subclasses can override them, but they don't have to.
     * because hooks already have a standard (but empty) implementation. Hooks
     * provide additional expansion points in some critical
     * Algorithm locations.
     */
    protected function hook1(): void
    {
    }

    protected function hook2(): void
    {
    }
}
