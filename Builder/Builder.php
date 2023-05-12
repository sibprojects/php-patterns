<?php

namespace Builder;

/**
 * Builder classes follow the Builder interface and provide
 * specific implementations of building steps. Your program may have several
 * Builder options implemented differently.
 */
class Builder implements BuilderInterface
{
    private $product;

    /**
     * The new builder instance must contain an empty product object,
     * which is used in further assembly.
     */
    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Product();
    }

    /**
     * All stages of production work with the same instance of the product.
     */
    public function producePartA(): void
    {
        $this->product->parts[] = "PartA1";
    }

    public function producePartB(): void
    {
        $this->product->parts[] = "PartB1";
    }

    public function producePartC(): void
    {
        $this->product->parts[] = "PartC1";
    }

    /**
     * Specific Builders should provide their own methods
     * get results. This is because different types of builders
     * can create completely different products with different interfaces.
     * Therefore, such methods cannot be declared in the base interface
     * Builder (at least in a statically typed language
     * programming). Please note that PHP is dynamic
     * in a typed language, and this method can be in the underlying interface.
     * However, we will not declare it here for the sake of clarity.
     *
     * Typically, after the end result is returned to the client, the instance
     * The builder must be ready to start production of the next product.
     * Therefore, it is common practice to call the reset method at the end of the body
     * getProduct method. However, this behavior is not mandatory, you
     * you can make your builders wait for an explicit reset request from the code
     * client before getting rid of the previous result.
     */
    public function getProduct(): Product1
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}
