<?php

namespace Decorator;

/**
 * The client code works with all objects using the Component interface.
 * Thus, it remains independent of specific component classes, with
 * which works.
 */
function clientCode(Component $component)
{
    // ...

    echo "RESULT: " . $component->operation();

    // ...
}

/**
 * So client code can support both simple components...
 */
$simple = new ConcreteComponent();
echo "Client: I've got a simple component:\n";
clientCode($simple);
echo "\n\n";

/**
 * ... and decorated.
 *
 * Note that decorators can wrap not only simple
 * components, but also other decorators.
 */
$decorator1 = new ConcreteDecoratorA($simple);
$decorator2 = new ConcreteDecoratorB($decorator1);
echo "Client: Now I've got a decorated component:\n";
clientCode($decorator2);