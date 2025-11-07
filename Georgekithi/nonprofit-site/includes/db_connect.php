<?php
// Load configuration settings
// Assumes config.php is located in the same 'includes' directory.
require_once 'config.php'; 

/**
 * Establishes a secure PDO connection to the database.
 * @return PDO The active database connection object.
 */
function get_db_connection() {
    // Access the global $config array defined in config.php
    global $config;

    // Define database connection parameters using the 'db' key
    $db_host = $config['db']['host'];
    $db_name = $config['db']['name'];
    $db_user = $config['db']['user'];
    $db_pass = $config['db']['pass'];

    // Data Source Name (DSN)
    $dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8mb4";
    
    // PDO options for security and error handling
    $options = [
        // Throw exceptions on errors
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        // Fetch results as associative arrays by default
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        // Disable emulation of prepared statements
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
        // Create and return the PDO connection object
        return new PDO($dsn, $db_user, $db_pass, $options);
    } catch (\PDOException $e) {
        // CRITICAL: Log the detailed error, but do NOT display it publicly.
        // In a live environment, use a secure logging system.
        error_log("Database Connection Error: " . $e->getMessage());
        
        // Display a generic, non-informative error message to the user
        die("Connection failed: A server error occurred.");
    }
}