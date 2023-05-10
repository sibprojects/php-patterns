# Examples of PHP design patterns

## Abstract Factory
An abstract factory defines an interface for creating all available types of products, and each specific factory implementation generates products of one of the variations. The client code calls the factory methods to get the products instead of creating them on its own with the new operator. At the same time, the factory itself ensures that the product of the desired variation is created.
