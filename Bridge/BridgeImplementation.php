<?php

namespace Bridge;

/**
 * An implementation sets an interface for all implementation classes. He shouldn't
 * conform to the Abstraction interface. In practice, both interfaces can be
 * Completely different. Typically, an Implementation interface provides only
 * primitive operations, while Abstraction defines operations more
 * high-level, based on these primitives.
 */
interface BridgeImplementation
{
    public function operationImplementation(): string;
}
