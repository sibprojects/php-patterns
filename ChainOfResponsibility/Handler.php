<?php

namespace ChainOfResponsibility;

/**
 * The Handler interface declares a method for constructing a chain of handlers. He
 * also declares a method for executing the request.
 */
interface Handler
{
    public function setNext(Handler $handler): Handler;

    public function handle(string $request): ?string;
}
