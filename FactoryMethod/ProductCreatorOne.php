<?php

namespace FactoryMethod;

/**
 * Concrete Creators override factory method in order to change
 * type of the resulting product.
 */
class ProductCreatorOne extends Creator
{
    /**
     *Note that the method signature still uses the type
     * an abstract product, although the method actually returns a concrete one
     * product. Thus, the Creator can remain independent of
     * specific product classes.
     */
    public function factoryMethod(): Product
    {
        return new ConcreteProductOne();
    }
}
