<?php

namespace AbstractFactory;

/**
 * The Abstract Factory interface declares a set of methods that return
 * various abstract products. These products are called a family and are related
 * a high-level theme or concept. Products in the same family can usually
 * interact with each other. A product family can have multiple
 * variations, but products of one variation are incompatible with products of another.
 */
interface AbstractFactoryInterface
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}
