<?php

namespace Proxy;

/**
 * The interface of the Proxy is identical to the interface of the Real Subject.
 */
class Proxy implements Subject
{
    private RealSubject $realSubject;

    /**
     * The proxy stores a reference to an object of class RealSubject. The client can
     * either lazily load it, or pass it to the Deputy.
     */
    public function __construct(RealSubject $realSubject)
    {
        $this->realSubject = $realSubject;

    }

    /**
     * The most common areas of application of the pattern Substitute
     * are lazy loading, caching, access control, logging
     * etc. The deputy can perform one of these tasks, and then, in
     * depending on the result, transfer execution to the method of the same name in
     * associated object of class Real Subject.
     */
    public function request(): void
    {
        if ($this->checkAccess()) {
            $this->realSubject->request();
            $this->logAccess();
        }

    }

    private function checkAccess(): bool
    {
        // Some real checks should go here.
        echo "Proxy: Checking access prior to firing a real request.\n";

        return true;

    }

    private function logAccess(): void
    {
        echo "Proxy: Logging the time of request.\n";

    }
}
