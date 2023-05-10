<?php

namespace AbstractFactory;

/**
 * Each Specific Factory has a corresponding product variation.
 */
class ProductFactoryTwo implements AbstractFactoryInterface
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2();
    }
}
