<?php

namespace Command;

/**
 * The Command interface declares a method for executing commands.
 */
interface Command
{
    public function execute(): void;
}
