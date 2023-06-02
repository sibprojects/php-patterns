<?php

namespace RefactoringGuru\Facade\Conceptual;

/**
 * The subsystem can accept requests either from the facade or from the client directly.
 * In any case, for the Facade Subsystem, this is another client, and it is not
 * part of the Subsystem.
 */
class Subsystem1
{
    public function operation1(): string
    {
        return "Subsystem1: Ready!\n";
    }

    // ...

    public function operationN(): string
    {
        return "Subsystem1: Go!\n";
    }
}
