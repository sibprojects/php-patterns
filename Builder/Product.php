<?php

namespace Builder;

/**
 * It only makes sense to use the Builder pattern when your products
 * are quite complex and require extensive configuration.
 *
 * Unlike other generative patterns, various concrete builders
 * may produce unrelated products. In other words, the results of various
 * builders may not always follow the same interface.
 */
class Product
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}
