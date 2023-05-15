<?php

namespace FactoryMethod;

/**
 * The Creator class declares a factory method that must return an object
 * class Product. Creator subclasses usually provide an implementation of this
 * method.
 */
abstract class Creator
{
    /**
     * Please note that the Creator may also provide an implementation
     * default factory method.
     */
    abstract public function factoryMethod(): Product;

    /**
     * Also note that, despite the name, the main duty of the Creator
     * is not about creating products. It usually contains some basic
     * business logic that is based on the Product objects returned
     * factory method. Subclasses can modify this business logic indirectly,
     * overriding a factory method and returning a different product type from it.
     */
    public function someOperation(): string
    {
        // Call the factory method to get the product object.
        $product = $this->factoryMethod();
        // Next, work with this product.
        $result = "Creator: has worked with " .
            $product->operation();

        return $result;
    }
}
