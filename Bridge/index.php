<?php

namespace Bridge;

/**
 * With the exception of the initialization phase, when the Abstraction object is associated with
 * by a specific Implementation object, client code should only depend on
 * Abstraction class. Thus, client code can support any
 * a combination of abstraction and implementation.
 */
function userCode(Abstraction $abstraction)
{
    echo $abstraction->operation();
}

/**
 * Custom code should work with any pre-configured
 * a combination of abstraction and implementation.
 */
$implementation = new ConcreteImplementationA();
$abstraction = new Abstraction($implementation);
userCode($abstraction);

echo "\n";

$implementation = new ConcreteImplementationB();
$abstraction = new ExtendedAbstraction($implementation);
userCode($abstraction);
