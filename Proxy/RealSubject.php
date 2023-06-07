<?php

namespace Proxy;

/**
 * Real Subject contains some basic business logic. Usually,
 * Real Subjects are able to perform some useful work, which to
 * it can also be very slow or precise - for example, correction of input
 * data. The substitute can solve these problems without any changes in the code
 * Real Subject.
 */
class RealSubject implements Subject
{
    public function request(): void
    {
        echo "RealSubject: Handling request.\n";

    }
}
