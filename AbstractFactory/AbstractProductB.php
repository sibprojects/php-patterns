<?php

namespace AbstractFactory;

/**
 * Basic interface of another product. All products can interact with each other
 * with a friend, but the correct interaction is possible only between products of the same
 * and the same specific variation.
 */
interface AbstractProductB
{
    /**
     * Product B is able to work independently...
     */
    public function usefulFunctionB(): string;

    /**
     * ...and interact with Products A of the same variation.
     *
     * Abstract Factory ensures that all the products it creates are
     * have the same variation and are therefore compatible.
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string;
}
