<?php

namespace Command;

/**
 * The sender is associated with one or more teams. He sends a request
 * team.
 */
class Invoker
{
    private Command $onStart;

    private Command $onFinish;

    /**
     * Command initialization.
     */
    public function setOnStart(Command $command): void
    {
        $this->onStart = $command;
    }

    public function setOnFinish(Command $command): void
    {
        $this->onFinish = $command;
    }

    /**
     * The sender does not depend on the classes of specific commands and recipients.
     * The sender passes the request to the recipient indirectly by executing a command.
     */
    public function doSomethingImportant(): void
    {
        echo "Invoker: Does anybody want something done before I begin?\n";
        if ($this->onStart instanceof Command) {
            $this->onStart->execute();
        }

        echo "Invoker: ...doing something really important...\n";

        echo "Invoker: Does anybody want something done after I finish?\n";
        if ($this->onFinish instanceof Command) {
            $this->onFinish->execute();
        }
    }
}
