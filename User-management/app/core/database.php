<?php
namespace App\Core;

class Database {
    private static $instance = null;
    private $connection;
    
    private function __construct() {
        try {
            $this->connection = new \PDO(
                "mysql:host=localhost;dbname=user_management", // Update DB name
                "root", // Update username
                ""     // Update password
            );
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
    
    // ... rest of the Database class
}
?>