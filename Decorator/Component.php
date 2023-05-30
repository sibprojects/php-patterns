<?php

namespace Decorator;

/**
 * The base interface of the Component defines the behavior that is changed
 * decorators.
 */
interface Component
{
    public function operation(): string;
}
