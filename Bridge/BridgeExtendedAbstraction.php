<?php

namespace Bridge;

/**
 * You can extend the Abstraction without changing the Implementation classes.
 */
class BridgeExtendedAbstraction extends BridgeAbstraction
{
    public function operation(): string
    {
        return "ExtendedAbstraction: Extended operation with:\n" .
            $this->implementation->operationImplementation();
    }
}
