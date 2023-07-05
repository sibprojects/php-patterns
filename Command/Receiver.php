<?php

namespace Command;

/**
 * The Receiver classes contain some important business logic. They are able to perform
 * all kinds of operations related to the execution of the request. In fact, any class
 * may act as the Recipient.
 */
class Receiver
{
    public function doSomething(string $a): void
    {
        echo "Receiver: Working on (" . $a . ".)\n";
    }

    public function doSomethingElse(string $b): void
    {
        echo "Receiver: Also working on (" . $b . ".)\n";
    }
}
