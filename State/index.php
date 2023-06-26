<?php

namespace State;

/**
 * Client code
 */
$context = new Context(new ConcreteStateA());
$context->request1();
$context->request2();
