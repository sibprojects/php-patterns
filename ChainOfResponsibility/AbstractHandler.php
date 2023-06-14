<?php

namespace ChainOfResponsibility;

/**
 * Default chaining behavior can be implemented inside the base class
 * handler.
 */
abstract class AbstractHandler implements Handler
{
    private Handler $nextHandler;

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        // Returning a handler from here will allow us to bind handlers with a simple
        // way, like this:
        // $monkey->setNext($squirrel)->setNext($dog);
        return $handler;
    }

    public function handle(string $request): ?string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}
