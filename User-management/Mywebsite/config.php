<?php
// ========== CONFIGURATION FILE ==========

// Display all errors for demonstration
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Define constants
define("UPLOAD_DIR", "uploads/");
define("CONTACT_FILE", "contacts.txt");

// Create upload directory if not exists
if (!is_dir(UPLOAD_DIR)) {
    mkdir(UPLOAD_DIR, 0777, true);
}
?>
    <?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'karate_championships');
define('DB_USER', 'root');
define('DB_PASS', '');


// Site Configuration
define('SITE_NAME', '2025 Islamic Solidarity Games');
define('SITE_URL', 'http://localhost/karate-championships');
define('CHAMPIONSHIP_LOCATION', 'Ryadh Saudi Arabia');
define('CHAMPIONSHIP_YEAR', '2025');

// Event Dates
$event_dates = [
    'UFAK_SENIOR' => 'July 25-27, 2025',
    'ABUJA_GAMES' => 'August 15-20, 2025'
];

// Database Connection
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>