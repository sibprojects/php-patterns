<?php

namespace TemplateMethod;

/**
 * The client code calls the template method to execute the algorithm. Client
 * the code should not know the specific class of the object with which it works, when
 * provided that it works with objects through the interface of their base class.
 */
function clientCode(AbstractClass $class)
{
    // ...
    $class->templateMethod();
    // ...
}

echo "Same client code will works with different subclasses:\n";
clientCode(new ConcreteClass1());
echo "\n";

echo "Same client code will works with different subclasses:\n";
clientCode(new ConcreteClass2());
