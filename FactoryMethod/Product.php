<?php

namespace FactoryMethod;

/**
 * The Product interface declares the operations that must be performed by all
 * specific products.
 */
interface Product
{
    public function operation(): string;
}

