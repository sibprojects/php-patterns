<?php

namespace Memento;

/**
 * The Snapshot interface provides a way to extract snapshot metadata such as
 * creation date or title. However, it does not reveal the state of the Creator.
 */
interface Memento
{
    public function getName(): string;

    public function getDate(): string;
}
