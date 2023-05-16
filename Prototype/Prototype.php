<?php

namespace Prototype;

/**
 * An example of a class that can be cloned. We'll see how it goes
 * cloning of field values of different types.
 */
class Prototype
{
    public $primitive;
    public $component;
    public $circularReference;

    /**
     * PHP has built-in cloning support. You can "clone"
     * object without defining any special methods, provided that
     * its fields are of primitive types. Fields containing objects retain their
     * references in the cloned object. Therefore, in some cases, you may
     * You will need to clone nested objects as well. It can be done
     * with a special clone method.
     */
    public function __clone()
    {
        $this->component = clone $this->component;

        // Clone an object that has a nested object with a reverse
        // by reference, requires a special approach. After cloning is complete
        // nested object must point to the cloned object, not
        // source object.
        $this->circularReference = clone $this->circularReference;
        $this->circularReference->prototype = $this;

    }
}
