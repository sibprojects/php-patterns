<?php

class DatabaseConnectionPool
{
    private $connections = [];
    private $maxConnections;
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($maxConnections, $host, $username, $password, $database)
    {
        $this->maxConnections = $maxConnections;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function getConnection()
    {
        if (count($this->connections) < $this->maxConnections) {
            $connection = new DatabaseConnection($this->host, $this->username, $this->password, $this->database);
            $this->connections[] = $connection;
            return $connection;
        } else {
            echo "All connections are in use. Reusing existing connection.\n";
            return array_pop($this->connections);
        }
    }

    public function releaseConnection(DatabaseConnection $connection)
    {
        $index = array_search($connection, $this->connections, true);
        if ($index !== false) {
            unset($this->connections[$index]);
        }
        $connection->close();
    }
}
