<?php

namespace Visitor;

class ConcreteComponentB implements Component
{
    /**
     * Same here: visitConcreteComponentB => ConcreteComponentB
     */
    public function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteComponentB($this);
    }

    public function specialMethodOfConcreteComponentB(): string
    {
        return "B";
    }
}
