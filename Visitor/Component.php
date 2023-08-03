<?php

namespace Visitor;

/**
 * The Component interface declares an accept method that takes as an argument
 * can receive any object that implements the visitor interface.
 */
interface Component
{
    public function accept(Visitor $visitor): void;
}
