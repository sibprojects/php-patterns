<?php

namespace Adapter;

/**
 * The target class declares an interface that client code can work with.
 */
class Target
{
    public function request(): string
    {
        return "I'm alive!";
    }
}
