<?php

class DatabaseConnection
{
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        // Simulate expensive initialization process
        sleep(1);
    }

    public function query($sql)
    {
        echo "Executing query: $sql\n";
    }

    public function close()
    {
        echo "Closing database connection\n";
    }
}
