<?php

namespace AbstractFactory;

/**
 * Specific Products are created by the respective Specific Factories.
 */
class ConcreteProductB1 implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        return "The result of the product B1.";
    }

    /**
     * Product B1 can only work correctly with Product A1. Nevertheless,
     * it accepts any instance of Abstract Product A as
     * argument.
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B1 collaborating with the ({$result})";
    }
}
