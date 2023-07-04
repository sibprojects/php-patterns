<?php

namespace Command;

/**
 * But there are also commands that delegate more complex operations to other objects,
 * referred to as "recipients".
 */
class ComplexCommand implements Command
{
    private Receiver $receiver;

    /**
     * Context data required to run receiver methods.
     */
    private $a;

    private $b;

    /**
     * Complex commands can take one or more recipient objects
     * along with any context data via the constructor.
     */
    public function __construct(Receiver $receiver, string $a, string $b)
    {
        $this->receiver = $receiver;
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * Commands can delegate execution to any receiver methods.
     */
    public function execute(): void
    {
        echo "ComplexCommand: Complex stuff should be done by a receiver object.\n";
        $this->receiver->doSomething($this->a);
        $this->receiver->doSomethingElse($this->b);
    }
}
