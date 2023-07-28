<?php

namespace Strategy;

/**
 * Concrete Strategies implement the algorithm by following the basic interface
 * Strategies. This interface makes them interchangeable in the Context.
 */
class ConcreteStrategyA implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}
