<?php

namespace Composite;

/**
 * The Container class contains complex components that may have nested
 * Components. Typically, Container objects delegate the actual work to their
 * children, and then "sum" the result.
 */
class Composite extends Component
{
    protected \SplObjectStorage $children;

    public function __construct()
    {
        $this->children = new \SplObjectStorage();
    }

    /**
     * Container object can both add components to its nested list
     * components, and remove them, both simple and complex.
     */
    public function add(Component $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);
    }

    public function remove(Component $component): void
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    public function isComposite(): bool
    {
        return true;
    }

    /**
     * The container does its core logic in a special way. It passes
     * recursively through all of its children, collecting and summing their results.
     * Since the children of the container pass these calls to their children, and so
     * further, as a result, the entire tree of objects is bypassed.
     */
    public function operation(): string
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->operation();
        }

        return "Branch(" . implode("+", $results) . ")";
    }
}
