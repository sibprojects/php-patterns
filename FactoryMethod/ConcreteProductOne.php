<?php

namespace FactoryMethod;

/**
 * Specific Products provide different implementations of the Product interface.
 */
class ConcreteProductOne implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProductOne}";
    }
}
