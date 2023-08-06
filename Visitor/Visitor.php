<?php

namespace Visitor;

/**
 * The Visitor interface declares a set of visiting methods corresponding to
 * component classes. The visiting method signature allows the visitor
 * define the specific class of the bean it deals with.
 */
interface Visitor
{
    public function visitConcreteComponentA(ConcreteComponentA $element): void;

    public function visitConcreteComponentB(ConcreteComponentB $element): void;
}
