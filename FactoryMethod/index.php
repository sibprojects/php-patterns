<?php

namespace FactoryMethod;

/**
 * Here we are working with an instance of a specific creator, albeit through it
 * basic interface. As long as the client continues to work with the creator through the base
 * interface, you can pass any creator subclass to it.
 */
function createCode(Creator $creator)
{
    // ...
    echo "Client: I'm not aware of the creator's class, but it still works.\n"
        . $creator->someOperation();
    // ...
}

/**
 * The application selects the type of creator depending on the configuration or environment.
 */
echo "App: Launched with the ConcreteCreator1.\n";
createCode(new ConcreteCreatorOne());
echo "\n\n";

echo "App: Launched with the ConcreteCreator2.\n";
createCode(new ConcreteCreatorTwo());
