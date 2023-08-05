<?php

namespace Visitor;

/**
 * Specific Visitors implement multiple versions of the same algorithm,
 * which can work with all classes of concrete components.
 *
 * You will feel the maximum benefit from the Visitor pattern using it with
 * a complex structure of objects, such as a Composite tree. In this case
 * it would be useful to store some intermediate state of the algorithm when
 * executing visitor methods on various structure objects.
 */
class ConcreteVisitor1 implements Visitor
{
    public function visitConcreteComponentA(ConcreteComponentA $element): void
    {
        echo $element->exclusiveMethodOfConcreteComponentA() . " + ConcreteVisitor1\n";
    }

    public function visitConcreteComponentB(ConcreteComponentB $element): void
    {
        echo $element->specialMethodOfConcreteComponentB() . " + ConcreteVisitor1\n";
    }
}
