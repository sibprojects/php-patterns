# Examples of PHP design patterns

### Abstract Factory
An abstract factory defines an interface for creating all available types of products, and each specific factory implementation generates products of one of the variations. The client code calls the factory methods to get the products instead of creating them on its own with the new operator. At the same time, the factory itself ensures that the product of the desired variation is created.

### Builder
The builder is a generative design pattern that allows you to create objects step by step.

Unlike other generative patterns, the Builder allows you to produce different products using the same building process.

### Factory method
A factory method is a generative design pattern that solves the problem of creating different products without specifying specific product classes.

The factory method specifies the method that should be used instead of calling the new operator to create product objects. Subclasses can override this method to change the type of products they create.

### Prototype
A prototype is a generative pattern that allows you to copy objects of any complexity without being tied to their specific classes.

All Prototype classes share a common interface. Therefore, you can copy objects regardless of their specific types and always be sure that you get an exact copy. Cloning is done by the prototype object itself, which allows it to copy the values of all fields, even private ones.

### Singleton
Singleton is a generative pattern that guarantees the existence of only one object of a certain class, and also allows you to reach this object from anywhere in the program.

Singleton has the same advantages and disadvantages as global variables. It's incredibly convenient to use, but it breaks the modularity of your code.

You can't just pick up and use a class that depends on a singleton in another program. To do this, you will have to emulate the presence of a loner there as well. Most often, this problem manifests itself when writing unit tests.

### Adapter
An Adapter is a structural pattern that allows incompatible objects to be friends.

The Adapter acts as a layer between two objects, turning calls from one into calls understandable to the other.

### Bridge
A Bridge is a structural pattern that divides business logic or a large class into several separate hierarchies, which can then be developed separately from each other.

One of these hierarchies (abstraction) will receive a reference to objects of another hierarchy (implementation) and will delegate the main work to them. Due to the fact that all implementations will follow a common interface, they can be interchanged within the abstraction.

### Composite
The Composite is a structural pattern that allows you to create a tree of objects and work with it in the same way as with a single object.

The Composite has long been synonymous with all the tasks involved in building a tree of objects. All Composite operations are based on recursion and "summation" of results on the branches of the tree.

### Decorator
A Decorator is a structural pattern that allows you to add new behaviors to objects on the fly by wrapping them in wrapper objects.

A Decorator allows objects to be wrapped an infinite number of times, thanks to the fact that both wrappers and the actual wrapped objects share a common interface.

### Facade
A Facade is a structural pattern that provides a simple (but stripped-down) interface to a complex object system, library, or framework.

In addition to reducing the overall complexity of a program, Facade also helps to bring code that depends on an external system into a single place.

### Flyweight
Flyweight is a structural pattern that saves memory by sharing the common state rendered in one object among many objects.

Flyweight allows you to save memory by caching the same data used in different objects.

### Proxy
A Proxy is an object that acts as a layer between the client and the actual service object. The Proxy receives calls from the client, performs its function (access control, caching, request modification, etc.), and then passes the call to the service object.

The Proxy has the same interface as the real object, so it makes no difference for the client whether to work through the Proxy or directly.

### ChainOfResponsibility
A chain of responsibility is a behavioral pattern that allows you to pass a request through a chain of potential handlers until one of them processes the request.

Eliminates the rigid binding of the sender of the request to its recipient, allowing you to build a chain of various handlers dynamically.

### Iterator
An Iterator is a behavioral pattern that allows you to sequentially traverse a complex collection without revealing the details of its implementation.

Thanks to the Iterator, the client can iterate through different collections in the same way, using a single Iterator interface.

## Memento
A Memento is a behavioral pattern that allows you to take snapshots of the internal state of objects and then restore them.

At the same time, the Memento does not disclose the details of the implementation of objects, and the client does not have access to the protected information of the object.

## State
A State is a behavioral pattern that allows you to dynamically change the behavior of an object when its state changes.

State-specific behaviors are moved to separate classes. The original class keeps a reference to one of these state objects and delegates work to it.

## Template Method
A Template Method is a behavioral pattern that defines the skeleton of an algorithm in a superclass and forces subclasses to implement the specific steps of that algorithm.

## Command
A Command is a behavioral pattern that allows you to wrap queries or simple operations in separate objects.

This allows you to delay the execution of commands, line them up in a queue, as well as store history and cancel.

## Mediator
The Mediator is a behavioral pattern that facilitates communication between system components.

The Rediator removes direct connections between individual components, forcing them to communicate with each other through itself.
