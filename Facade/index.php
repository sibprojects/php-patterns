<?php

namespace RefactoringGuru\Facade\Conceptual;

/**
 * Client code works with complex subsystems through a simple interface,
 *provided by Facade. When a facade manages the lifecycle of a subsystem,
 * the client may not even be aware of the subsystem's existence. This approach allows
 * keep complexity under control.
 */
function clientCode(Facade $facade)
{
    // ...

    echo $facade->operation();

    // ...
}

/**
 * Some subsystem objects may already be created in the client code. In that
 * case it may be appropriate to initialize Facade with these
 * objects instead of letting the Facade create new instances.
 */
$subsystem1 = new Subsystem1();
$subsystem2 = new Subsystem2();
$facade = new Facade($subsystem1, $subsystem2);
clientCode($facade);
