<?php

namespace Strategy;

/**
 * Context defines the interface of interest to clients.
 */
class Context
{
    /**
     * The context stores a reference to one of the Strategy objects.
     * The context does not know the specific strategy class. He must work with
     * all strategies through the Strategy interface.
     */
    private Strategy $strategy;

    /**
     * Usually the Context accepts the strategy via the constructor and also
     * provides a setter to change it at runtime.
     */
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Usually the Context allows you to replace the Strategy object at run time.
     */
    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Instead of implementing multiple versions yourself
     * algorithm, Context delegates some work to the Strategy object.
     */
    public function doSomeBusinessLogic(): void
    {
        // ...

        echo "Context: Sorting data using the strategy (not sure how it'll do it)\n";
        $result = $this->strategy->doAlgorithm(["a", "b", "c", "d", "e"]);
        echo implode(",", $result) . "\n";

        // ...
    }
}
