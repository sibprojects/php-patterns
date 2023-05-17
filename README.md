# Examples of PHP design patterns

## Abstract Factory
An abstract factory defines an interface for creating all available types of products, and each specific factory implementation generates products of one of the variations. The client code calls the factory methods to get the products instead of creating them on its own with the new operator. At the same time, the factory itself ensures that the product of the desired variation is created.

## Builder
The builder is a generative design pattern that allows you to create objects step by step.
Unlike other generative patterns, the Builder allows you to produce different products using the same building process.

## Factory method
A factory method is a generative design pattern that solves the problem of creating different products without specifying specific product classes.
The factory method specifies the method that should be used instead of calling the new operator to create product objects. Subclasses can override this method to change the type of products they create.

## Prototype
A prototype is a generative pattern that allows you to copy objects of any complexity without being tied to their specific classes.
All Prototype classes share a common interface. Therefore, you can copy objects regardless of their specific types and always be sure that you get an exact copy. Cloning is done by the prototype object itself, which allows it to copy the values of all fields, even private ones.

## Singleton
Singleton is a generative pattern that guarantees the existence of only one object of a certain class, and also allows you to reach this object from anywhere in the program.
Singleton has the same advantages and disadvantages as global variables. It's incredibly convenient to use, but it breaks the modularity of your code.
You can't just pick up and use a class that depends on a singleton in another program. To do this, you will have to emulate the presence of a loner there as well. Most often, this problem manifests itself when writing unit tests.
