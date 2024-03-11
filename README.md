# Examples of PHP design patterns

### Abstract Factory
Abstract Factory is a design pattern that provides an interface for creating families of related or dependent objects without specifying their concrete classes. It allows creating objects that adhere to a specific interface while hiding the concrete implementation from the client.

The main idea of the Abstract Factory is to act as a factory of factories. It defines an interface for creating factories that, in turn, create concrete objects. Thus, the Abstract Factory ensures the creation of objects that are related to each other without explicitly mentioning their classes.

The main components of the Abstract Factory pattern are:
<ol>
  <li>Abstract Factory: Defines an interface for creating families of related objects.</li>
  <li>Concrete Factory: Implements the interface of the Abstract Factory and creates concrete objects.</li>
  <li>Abstract Products: Define interfaces for various types of products created by the factory.</li>
  <li>Concrete Products: Implement the interfaces of abstract products.</li>
</ol>

Using the Abstract Factory pattern allows creating families of related objects while ensuring their compatibility. Client code works with abstract classes and interfaces, making it independent of the specific product classes being created.

The benefits of using the Abstract Factory pattern include:

<ol>
  <li>Ensures the compatibility of created objects.</li>
  <li>Isolates client code from concrete product classes.</li>
  <li>Simplifies the replacement of product families as the client code depends only on abstract classes and interfaces.</li>
  <li>Facilitates the addition of new product variants and factories without modifying existing code.</li>
</ol>

However, it's important to note that the Abstract Factory pattern can become complex to maintain, especially if product families change or expand frequently. Additionally, adding a new product may require modifications to all existing factories, which can be labor-intensive.


### Builder
Builder pattern is a creational design pattern that separates the construction of a complex object from its representation. It allows you to create complex objects step by step, decoupling the construction process from the object's final representation. The main idea behind the Builder pattern is to provide a clear, step-by-step approach to creating objects without exposing the details of the object's construction.

Intent:
The Builder pattern is used when you need to create complex objects with various configurations and parts. It is particularly useful when:

<ol>
  <li>The object you want to create has multiple components or parts with different configurations.</li>
  <li>The construction process of the object is complex and needs to be abstracted.</li>
  <li>The object's representation can vary, and you want to hide the internal details of the construction process.</li>
</ol>

Components of the Builder pattern:

<ol>
  <li>Builder: Defines the common interface for creating various parts of a complex object.</li>
  <li>ConcreteBuilder: Implements the Builder interface for constructing and assembling specific parts of the object.</li>
  <li>Product: Represents the complex object that needs to be built using the Builder pattern.</li>
  <li>Director: Manages the sequence of calls to the builder's methods for constructing the object. It may contain logic for step-by-step construction of the object.</li>
</ol>

Example of using the Builder pattern:

Let's consider a scenario where we are constructing houses, and each house can have various characteristics like the number of rooms, the presence of a swimming pool, roof type, etc. Each house is constructed in a different sequence, and we have several types of houses that we can build.

In this case, the HouseBuilder class would represent the Builder, and ConcreteHouseBuilder would be the ConcreteBuilder. To manage the construction process, we might use the Director class.

Using the Builder pattern, we can easily create different types of houses without modifying the construction logic. This allows us to add new types of houses without changing the existing code, ensuring easy extensibility and maintainability of the system.


### Factory method

The "Factory Method" pattern belongs to the class of "Creational" design patterns. It provides an interface for creating objects but allows subclasses to decide which classes to instantiate. This pattern delegates the object creation to subclasses rather than the main class.

The main idea of the Factory Method pattern is that instead of directly calling a constructor to create objects, a factory method is used. This method is defined in an interface or an abstract class and is implemented by various subclasses to create different types of objects.

Advantages of the Factory Method pattern:

<ol>
  <li>It allows the client code to be independent of specific product classes, as it operates only with abstract types through the creation interface.</li>
  <li>It allows adding new products without modifying existing factory and client code.</li>
  <li>It hides the complexities of object creation and delegates the responsibility to the respective factories.</li>
</ol>

### Prototype
The Prototype pattern is one of the generative design patterns and is used to create objects by cloning an existing object, instead of creating a new object from scratch. It allows creating copies of objects, avoiding the need for redundant code to initialize them.

The main idea behind the Prototype pattern is to have an abstract base class that contains a cloning method. Subclasses of this base class override the cloning method to create their own copies of objects.

Applying the Prototype pattern reduces the number of classes in the program and promotes flexibility in creating new objects since changes in the classes do not affect the process of their cloning.

An example of using the Prototype pattern could be when we have a complex object that requires significant resources for initialization, and we want to create many similar objects with different values without reinitializing all the data.

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

## Observer
An Observer is a behavioral pattern that allows objects to notify other objects of changes in their state.

At the same time, Observers can freely subscribe and unsubscribe from these notifications.

## Strategy

A Strategy is a behavioral pattern that brings a set of algorithms into its own classes and makes them interchangeable.

Other objects contain a reference to the Strategy object and delegate work to it. The program can replace this object with another if a different way of solving the problem is required.

Applicability: The Strategy is often used in PHP code, especially where you need to replace the algorithm at runtime. But the pattern has a fairly strong competitor in the face of anonymous functions, which PHP has been supporting for quite some time.

Signs of pattern application: A class delegates execution to a nested object of an abstract type or interface.

## Visitor

This example shows the structure of the Visitor pattern, namely what classes it consists of, what roles these classes perform and how they interact with each other.

After familiarizing yourself with the structure, it will be easier for you to understand the second example, which considers a real use case for the pattern in the PHP world.

## Interpreter

The Interpreter Pattern is a behavioral design pattern that is used to define a grammar for interpreting a language and provides a way to evaluate expressions in that language. It falls under the category of behavioral patterns in the Gang of Four (GoF) design patterns.

Intent:

<ol>
    <li>Define a language for a particular domain and provide a way to interpret sentences in that language.</li>
    <li>Represent grammar rules as objects and allow for their composition to create complex expressions.</li>
    <li>Interpret sentences in the language using these objects.</li>
</ol>

Main Components:

<ol>
    <li>AbstractExpression: This is the abstract class or interface that declares an interpret() method. Concrete expressions are derived from this class or interface.</li>
    <li>TerminalExpression: These are concrete expression classes that implement the interpret() method for terminal symbols in the grammar. Terminal expressions represent the basic building blocks of the language.</li>
    <li>NonterminalExpression: These are concrete expression classes that implement the interpret() method for non-terminal symbols in the grammar. Non-terminal expressions combine one or more expressions, forming more complex expressions.</li>
    <li>Context: The context contains information that needs to be interpreted. It can maintain the global state that the interpreter uses while interpreting expressions.</li>
</ol>

How it works:

<ol>
    <li>The client creates and configures an abstract syntax tree (AST) of the language's sentences. This AST consists of terminal and non-terminal expression objects.</li>
    <li>The client initiates the interpretation process by calling the interpret() method on the root of the abstract syntax tree.</li>
    <li>The interpretation process recursively traverses the abstract syntax tree, invoking interpret() on each expression.</li>
    <li>Terminal expressions perform specific actions based on their interpretation, while non-terminal expressions typically combine the interpretations of their child expressions to achieve the final result.</li>
</ol>

### Anti-corruption Layer

The Anti-corruption Layer pattern is used in software development to isolate one's own system from changes or incompatibilities of external systems or third-party services.

The point of this pattern is to create an intermediate layer between external systems and your own system, which will allow you to translate data and queries between different formats, structures or protocols. This anti-corruption layer insulates your system from changes in third-party services by providing adapters or facades that bring data to your system's standards.

This approach allows your system to remain flexible and independent of external changes. You can update and change your external integrations without affecting the core functionality of your system. In addition, the anti-corruption layer simplifies the maintenance and expansion of the system, since changes in external services are easier to adapt within this layer than directly in the main system.

