<?php

namespace FactoryMethod;

class ConcreteProductTwo implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProductTwo}";
    }
}
