<?php

namespace Flyweight;

/**
 * Client code usually creates a bunch of pre-populated lightweights on
 * application initialization stage.
 */
$factory = new FlyweightFactory([
    ["BMW", "M5", "red"],
    ["BMW", "X6", "white"],
    ["Chevrolet", "Camaro2018", "pink"],
    ["Mercedes Benz", "C300", "black"],
    ["Mercedes Benz", "C500", "red"],
    // ...
]);
$factory->listFlyweights();

// ...

function addCarToPoliceDatabase(
    FlyweightFactory $ff, $plates, $owner,
                     $brand, $model, $color
)
{
    echo "\nClient: Adding a car to database.\n";
    $flyweight = $ff->getFlyweight([$brand, $model, $color]);

// Client code either saves or evaluates external state and
    // passes it to lightweight methods.
    $flyweight->operation([$plates, $owner]);
}

addCarToPoliceDatabase($factory,
    plates: "CL234IR",
    owner: "James Doe",
    brand: "BMW",
    model: "M5",
    color: "red"
);

addCarToPoliceDatabase($factory,
    plates: "CL234IR",
    owner: "James Doe",
    brand: "BMW",
    model: "X1",
    color: "red"
);

$factory->listFlyweights();