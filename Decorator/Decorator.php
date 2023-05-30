<?php

namespace Decorator;

/**
 * The Decorator base class follows the same interface as other components.
 * The main purpose of this class is to define a wrapper interface for all concrete
 * decorators. The default wrapper code implementation may include a field
 * to store the wrapped component and its initializer.
 */
class Decorator implements Component
{
    protected $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    /**
     * The decorator delegates all work to the wrapped component.
     */
    public function operation(): string
    {
        return $this->component->operation();
    }
}
