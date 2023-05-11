# Examples of PHP design patterns

## Abstract Factory
An abstract factory defines an interface for creating all available types of products, and each specific factory implementation generates products of one of the variations. The client code calls the factory methods to get the products instead of creating them on its own with the new operator. At the same time, the factory itself ensures that the product of the desired variation is created.

## Builder
The builder is a generative design pattern that allows you to create objects step by step.
Unlike other generative patterns, the Builder allows you to produce different products using the same building process.