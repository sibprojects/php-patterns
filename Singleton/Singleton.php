<?php

namespace Singleton;

/**
 * The Loner class provides a `GetInstance` method that behaves like
 * alternative constructor and allows clients to get the same
 * an instance of the class on every call.
 */
class Singleton
{
    /**
     * The singleton object is stored in a static class field. This field is an array, so
     * how do we allow our Loner to have subclasses. All elements of this
     * arrays will be instances of specific subclasses of Singleton. Don't worry,
     * we're about to get to know how it works.
     */
    private static $instances = [];

    /**
     * Singleton Constructor should always be hidden to prevent
     * creating an object through the new operator.
     */
    protected function __construct()
    {
    }

    /**
     * Loners must not be cloneable.
     */
    protected function __clone()
    {
    }

    /**
     * Loners must not be recoverable from strings.
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
     * This is a static method that controls access to the singleton instance. At
     * first run, it instantiates the singleton and places it in
     * static field. On subsequent runs, it returns an object to the client,
     * stored in a static field.
     *
     * This implementation allows you to extend the Singleton class while keeping the
     * only one instance of each subclass.
     */
    public static function getInstance(): Singleton
    {
        $class = static::class;
        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new static();
        }

        return self::$instances[$class];
    }

    /**
     * Finally, any singleton must contain some business logic that
     * can be executed on its copy.
     */
    public function someBusinessLogic()
    {
        // ...
    }
}
