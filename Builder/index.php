<?php

namespace Builder;

/**
 * Here we create a builder object, pass it to the director, and then
 * initiates the build process. The end result is retrieved from the object-
 * builder.
 */
$director = new Director();

$builder = new ConcreteBuilder1();
$director->setBuilder($builder);

echo "Standard basic product:\n";
$director->buildMinimalViableProduct();
$builder->getProduct()->listParts();

echo "Standard full featured product:\n";
$director->buildFullFeaturedProduct();
$builder->getProduct()->listParts();

// Remember that the Builder pattern can be used without the Director class.
echo "Custom product:\n";
$builder->producePartA();
$builder->producePartC();
$builder->getProduct()->listParts();
