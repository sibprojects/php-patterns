<?php

namespace Composite;

/**
 * The client code works with all components through the base interface.
 */
function clientCode(Component $component)
{
    // ...

    echo "RESULT: " . $component->operation();

    // ...
}

/**
 * This way client code can support simple leaf components...
 */
$simple = new Leaf();
echo "Client: We have got a simple component:\n";
clientCode($simple);
echo "\n\n";

/**
 * ...as well as complex containers.
 */
$tree = new Composite();
$branch1 = new Composite();
$branch1->add(new Leaf());
$branch1->add(new Leaf());
$branch2 = new Composite();
$branch2->add(new Leaf());
$tree->add($branch1);
$tree->add($branch2);
echo "Client: We have got a composite tree:\n";
clientCode($tree);
echo "\n\n";

/**
 * Due to the fact that the operations of managing children are declared in the base class
 * Component, client code can work with both simple and complex
 * components, regardless of their specific classes.
 */
function clientCode2(Component $component1, Component $component2)
{
    // ...

    if ($component1->isComposite()) {
        $component1->add($component2);
    }
    echo "RESULT: " . $component1->operation();

    // ...
}

echo "Client: We do not need to check the components classes even when managing the tree:\n";
clientCode2($tree, $simple);
