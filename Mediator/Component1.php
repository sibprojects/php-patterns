<?php

namespace Mediator;

/**
 * Specific Components implement different functionality. They do not depend on
 * other components. They also don't depend on any concrete classes
 * intermediaries.
 */
class Component1 extends BaseComponent
{
    public function doA(): void
    {
        echo "Component 1 does A.\n";
        $this->mediator->notify($this, "A");
    }

    public function doB(): void
    {
        echo "Component 1 does B.\n";
        $this->mediator->notify($this, "B");
    }
}
