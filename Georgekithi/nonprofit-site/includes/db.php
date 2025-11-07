<?php
require_once __DIR__ . '/config.php';

// Access the global $config array defined in config.php
global $config;

// Define variables for PDO connection using the values from the $config array
$db_host = $config['db']['host'];
$db_name = $config['db']['name'];
$db_user = $config['db']['user'];
$db_pass = $config['db']['pass'];

try {
    // Build DSN string for PDO using the variables
    $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8mb4';

    // Create PDO connection
    $pdo = new PDO($dsn, $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

} catch (PDOException $e) {
    // If connection fails, set $pdo to null and log the error
    $pdo = null;
    error_log('Database connection failed: ' . $e->getMessage());
    // CRITICAL: Stop execution or show a generic message if the database is vital
    // die("Site temporarily unavailable due to a database error.");
}

// Function to check database connection status (remains the same)
function hasDatabase() {
    global $pdo;
    return $pdo instanceof PDO;
}

// NOTE: You can now use the global $pdo variable in other files after including db.php
?>