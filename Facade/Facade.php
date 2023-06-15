<?php

namespace Facade;

/**
 * The Facade class provides a simple interface for complex logic of one or
 * multiple subsystems. The facade delegates client requests to the appropriate
 * objects within the subsystem. The façade is also responsible for managing their life
 * cycle. All this protects the client from unwanted complexity of the subsystem.
 */
class Facade
{
    protected Subsystem1 $subsystem1;

    protected Subsystem2 $subsystem2;

    /**
     *Depending on the needs of your application, you can provide
     * Facade existing subsystem objects or force Facade to create them
     * on one's own.
     */
    public function __construct(
        Subsystem1 $subsystem1 = null,
        Subsystem2 $subsystem2 = null
    )
    {
        $this->subsystem1 = $subsystem1 ?: new Subsystem1();
        $this->subsystem2 = $subsystem2 ?: new Subsystem2();
    }

    /**
     * Facade methods are handy for quick access to complex functionality
     * subsystem. However, clients receive only a fraction of the subsystem's capabilities.
     */
    public function operation(): string
    {
        $result = "Facade initializes subsystems:\n";
        $result .= $this->subsystem1->operation1();
        $result .= $this->subsystem2->operation1();
        $result .= "Facade orders subsystems to perform the action:\n";
        $result .= $this->subsystem1->operationN();
        $result .= $this->subsystem2->operationZ();

        return $result;
    }
}
