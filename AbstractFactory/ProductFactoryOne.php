<?php

namespace AbstractFactory;

/**
 * A specific Factory produces a family of products of one variation. Factory
 * guarantees the compatibility of the received products. note that
 * Concrete Factory method signatures return an abstract product, while
 * while inside the method an instance of a specific product is created.
 */
class ProductFactoryOne implements AbstractFactoryInterface
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1();
    }
}
