<?php

/**
 * FactoryConstructor works with factories and products only through abstract
 * types: Abstract Factory and Abstract Product. This allows you to transfer
 * any factory or product subclass to client code without breaking it.
 */
class FactoryConstructor
{
    private $productA;
    private $productB;

    public function create(AbstractFactoryInterface $factory)
    {
        $this->setProductA($factory->createProductA());
        $this->setProductB($factory->createProductB());
    }

    public function getProductA()
    {
        return $this->productA;
    }

    public function setProductA($productA)
    {
        $this->productA = $productA;
        return $this;
    }

    public function getProductB()
    {
        return $this->productB;
    }

    public function setProductB($productB)
    {
        $this->productB = $productB;
        return $this;
    }

}
