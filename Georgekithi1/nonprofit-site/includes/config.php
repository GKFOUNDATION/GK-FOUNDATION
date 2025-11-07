<?php
// config.php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'georgekithi_foundation');
define('DB_USER', 'root');
define('DB_PASS', '');

// Site configuration
define('SITE_NAME', 'George Kithi Foundation');
define('SITE_EMAIL', 'info@georgekithifoundation.org');
define('SITE_PHONE', '+254 XXX XXX XXX');
define('SITE_URL', 'http://localhost/Georgekithi/nonprofit-site');

// File upload paths
define('UPLOAD_PATH', 'uploads/');
define('MAX_FILE_SIZE', 5242880); // 5MB

// Enable error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>