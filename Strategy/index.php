<?php

namespace Strategy;

/**
 * The client code selects a specific strategy and passes it to the context. Client
 * must be aware of the differences between strategies in order to make the right choice.
 */
$context = new Context(new ConcreteStrategyA());
echo "Client: Strategy is set to normal sorting.\n";
$context->doSomeBusinessLogic();

echo "\n";

echo "Client: Strategy is set to reverse sorting.\n";
$context->setStrategy(new ConcreteStrategyB());
$context->doSomeBusinessLogic();
