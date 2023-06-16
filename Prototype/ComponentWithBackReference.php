<?php

namespace Prototype;

class ComponentWithBackReference
{
    public Prototype $prototype;

    /**
     * Note that the constructor will not be executed during
     * cloning. If you have complex logic inside a constructor, you may
     * need to be done in the clone method as well.
     */
    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;

    }
}
