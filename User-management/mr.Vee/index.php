<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Welcome to mr.Vee</title>
</head>
<body>
   <?php
class Database {
    // Static property - shared across all instances
    private static $instance = null;
    private $connection;
    
    // Private constructor - enforcing Singleton pattern
    private function __construct() {
        // Simulate database connection
        $this->connection = "Database connection established";
        echo "Database connected!<br>";
    }
    
    // Static method to get singleton instance
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function query($sql) {
        return "Executing: $sql<br>";
    }
    
    // Prevent cloning and unserialization
    private function __clone() {}
    public function __wakeup() {}
}
?>
</body>
</html> 