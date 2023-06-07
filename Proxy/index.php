<?php

namespace Proxy;

/**
 * Client code should work with all objects (both real and
 * substitutes) through the interface of the Subject to maintain as real
 * Subjects and alternates. In real life, however, clients are mostly
 * work with real subjects directly. In this case, for a simpler
 * pattern implementations, you can extend the substitute from the real class
 * subject.
 */
function clientCode(Subject $subject)
{
    // ...
    $subject->request();

    // ...

}


echo "Client: Executing the client code with a real subject:\n";
$realSubject = new RealSubject();
clientCode($realSubject);

echo "\n";

echo "Client: Executing the same client code with a proxy:\n";
$proxy = new Proxy($realSubject);
clientCode($proxy);
