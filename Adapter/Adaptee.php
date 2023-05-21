<?php

namespace Adapter;

/**
 * An adaptable class contains some useful behavior, but its interface
 * incompatible with existing client code. An adaptable class needs
 * some rework before client code can use it.
 */
class Adaptee
{
    public function specificRequest(): string
    {
        return "!evila m'I";
    }
}
