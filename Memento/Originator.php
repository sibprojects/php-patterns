<?php

namespace Memento;

/**
 * Creator contains some important state which may over time
 * change. It also declares a save state method inside the snapshot and a method
 * restore state from it.
 */
class Originator
{
    /**
     * For convenience, the state of the creator is stored inside a single variable.
     */
    private string $state;

    public function __construct(string $state)
    {
        $this->state = $state;
        echo "Originator: My initial state is: {$this->state}\n";
    }

    /**
     * The Creator's business logic can affect its internal state.
     * Therefore, the client must back up the state with
     * the save method before running the business logic methods.
     */
    public function doSomething(): void
    {
        echo "Originator: I'm doing something important.\n";
        $this->state = $this->generateRandomString(30);
        echo "Originator: and my state has changed to: {$this->state}\n";
    }

    private function generateRandomString(int $length = 10): string
    {
        return substr(
            str_shuffle(
                str_repeat(
                    $x = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                    ceil($length / strlen($x))
                )
            ),
            1,
            $length,
        );
    }

    /**
     * Stores the current state inside the snapshot.
     */
    public function save(): Memento
    {
        return new ConcreteMemento($this->state);
    }

    /**
     * Restores the state of the Creator from the snapshot object.
     */
    public function restore(Memento $memento): void
    {
        $this->state = $memento->getState();
        echo "Originator: My state has changed to: {$this->state}\n";
    }
}
