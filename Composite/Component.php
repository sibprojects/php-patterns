<?php

namespace Composite;

/**
 * The base class Component declares common operations for both simple and
 * complex structure objects.
 */
abstract class Component
{
    protected ?Component $parent;

    /**
     * If necessary, the base Component can declare an interface for
     * setting and getting the parent of a component in a tree structure. He
     * may also provide some default implementation for these
     * methods.
     */
    public function setParent(?Component $parent)
    {
        $this->parent = $parent;
    }

    public function getParent(): Component
    {
        return $this->parent;
    }

    /**
     * In some cases, it is advisable to define control operations
     * descendants directly in the base class Component. So you don't need
     * will provide specific component classes to client code, even
     * during the assembly of the object tree. The disadvantage of this approach is that these
     * methods will be empty for leaf level components.
     */
    public function add(Component $component): void
    {
    }

    public function remove(Component $component): void
    {
    }

    /**
     * You can provide a method that allows client code to understand
     * whether the component can have nested objects.
     */
    public function isComposite(): bool
    {
        return false;
    }

    /**
     * The Base Component may itself implement some default behavior
     * or delegate it to concrete classes by declaring a method containing the behavior
     * abstract.
     */
    abstract public function operation(): string;
}
