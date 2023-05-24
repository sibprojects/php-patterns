<?php

namespace Bridge;

/**
 * Each Concrete Implementation corresponds to a specific platform and implements
 * interface Implementation using the API of this platform.
 */
class ConcreteBridgeImplementationA implements BridgeImplementation
{
    public function operationImplementation(): string
    {
        return "ConcreteImplementationA: Here's the result on the platform A.\n";
    }
}
