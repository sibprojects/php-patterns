<?php

namespace Builder;

/**
 * Builder interface declares creating methods for various parts of objects Products.
 */
interface BuilderInterface
{
    public function producePartA(): void;

    public function producePartB(): void;

    public function producePartC(): void;
}
