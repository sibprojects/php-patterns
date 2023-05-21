<?php

namespace Adapter;

echo "Client: I can work just fine with the Target objects:\n";
$target = new Target();
echo $target->request();
echo "\n\n";

$adaptee = new Adaptee();
echo "Client: The Adaptee class has a weird interface. See, I don't understand it:\n";
echo "Adaptee: " . $adaptee->specificRequest();
echo "\n\n";

echo "Client: But I can work with it via the Adapter:\n";
$adapter = new Adapter($adaptee);
echo $adapter->request();
