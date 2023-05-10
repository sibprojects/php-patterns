<?php

namespace AbstractFactory;

/**
 * Each individual product in the product family must have a basic interface.
 * All product variations must implement this interface.
 */
interface AbstractProductA
{
    public function usefulFunctionA(): string;
}
