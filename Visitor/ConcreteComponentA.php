<?php

namespace Visitor;

/**
 * Each Concrete Component must implement the accept method in such a way that
 * so that it calls the visitor method corresponding to the bean class.
 */
class ConcreteComponentA implements Component
{
    /**
     * Note that we are calling visitConcreteComponentA which corresponds to
     * the name of the current class. In this way, we allow the visitor to know with
     * which component class it works with.
     */
    public function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteComponentA($this);
    }

    /**
     * Concrete Components may have special methods not declared in their
     * base class or interface. The visitor can still use these
     * methods because it knows about the particular class of the bean.
     */
    public function exclusiveMethodOfConcreteComponentA(): string
    {
        return "A";
    }
}
