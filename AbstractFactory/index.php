<?php

/**
 * Client code can work with any concrete factory class.
 */
echo 'Testing first factory type:' . PHP_EOL;
$factory = (new FactoryConstructor)->create(new ConcreteFactory1());
echo $factory->getProductB()->usefulFunctionB() . PHP_EOL;
echo $factory->getProductB()->anotherUsefulFunctionB($factory->getProductA()) . PHP_EOL;

echo PHP_EOL;

echo "Testing second factory type:\n";
$factory = (new FactoryConstructor)->create(new ConcreteFactory2());
echo $factory->getProductB()->usefulFunctionB() . PHP_EOL;
echo $factory->getProductB()->anotherUsefulFunctionB($factory->getProductA()) . PHP_EOL;
