<?php

namespace Mediator;

/**
 * The Broker interface provides a method used by components to
 * mediator notifications about various events. The mediator can respond to
 * these events and pass execution to other components.
 */
interface Mediator
{
    public function notify(object $sender, string $event): void;
}
