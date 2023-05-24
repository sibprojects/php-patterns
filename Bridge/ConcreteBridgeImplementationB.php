<?php

namespace Bridge;

class ConcreteBridgeImplementationB implements BridgeImplementation
{
    public function operationImplementation(): string
    {
        return "ConcreteImplementationB: Here's the result on the platform B.\n";
    }
}
