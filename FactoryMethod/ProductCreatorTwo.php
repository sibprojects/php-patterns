<?php

namespace FactoryMethod;

class ProductCreatorTwo extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProductTwo();
    }
}

