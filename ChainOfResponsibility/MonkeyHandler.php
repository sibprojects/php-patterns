<?php

namespace ChainOfResponsibility;

/**
 * All Concrete Handlers either process the request or forward it
 * to the next handler in the chain.
 */
class MonkeyHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Banana") {
            return "Monkey: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }
}
