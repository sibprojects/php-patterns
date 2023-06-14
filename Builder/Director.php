<?php

namespace Builder;

/**
 * The director is only responsible for performing the building steps in a certain
 * sequences. This is useful when producing products in a certain
 * order or special configuration. Strictly speaking, the Director class is optional,
 *because the customer can directly manage the builders.
 */
class Director
{
    private Builder $builder;

    /**
     * Director works with any builder instance that is passed to him
     * client code. So client code can change the final
     * type of newly assembled product.
     */
    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    /**
     * A director can build multiple variations of a product using the same
     * construction steps.
     */
    public function buildMinimalViableProduct(): void
    {
        $this->builder->producePartA();
    }

    public function buildFullFeaturedProduct(): void
    {
        $this->builder->producePartA();
        $this->builder->producePartB();
        $this->builder->producePartC();
    }
}
