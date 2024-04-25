<?php

// Usage example
$pool = new DatabaseConnectionPool(3, 'localhost', 'root', 'password', 'mydatabase');

// Get connections
$connection1 = $pool->getConnection();
$connection2 = $pool->getConnection();
$connection3 = $pool->getConnection();

// Release one connection
$pool->releaseConnection($connection2);

// Reuse released connection
$connection4 = $pool->getConnection();

// Close connections
$pool->releaseConnection($connection1);
$pool->releaseConnection($connection3);
$pool->releaseConnection($connection4);
