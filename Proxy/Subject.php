<?php

namespace Proxy;

/**
 * The Subject Interface declares common operations for both Real Subject and
 * for Deputy. While the client is working with a Real Subject using this
 * interface, you can give him a proxy instead of a real subject.
 */
interface Subject
{
    public function request(): void;
}
