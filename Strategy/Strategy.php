<?php

namespace Strategy;

/**
 * The Strategy interface declares operations common to all supported versions
 * some algorithm.
 *
 * The context uses this interface to call the algorithm defined
 * Specific Strategies.
 */
interface Strategy
{
    public function doAlgorithm(array $data): array;
}
