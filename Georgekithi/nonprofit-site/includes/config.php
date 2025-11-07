<?php
// ===========================================
// SITE CONFIGURATION
// ===========================================
define('SITE_NAME', 'George Kithi Foundation');
define('SITE_URL', 'http://localhost/Georgekithi/nonprofit-site');
define('SITE_EMAIL', 'info@georgekithifoundation.org');
define('SITE_PHONE', '+254 XXX XXX XXX');

// Base Path
define('BASE_PATH', __DIR__);

// Error reporting - turn off for production
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ===========================================
// DATABASE CONFIGURATION (Use an array for easier access)
// ===========================================
$config['db'] = [
    'host' => 'localhost',
    'name' => 'georgekithi_foundation',
    'user' => 'root',
    'pass' => '', // Replace with a strong password for production!
];

// ===========================================
// PAYMENT GATEWAY & M-PESA CONFIGURATION (CRITICAL)
// ===========================================

// --- M-Pesa Paybill Details ---
// IMPORTANT: These must be replaced with your actual, live Safaricom credentials.
$config['mpesa'] = [
    'paybill_number'    => '123456',           // Your actual M-Pesa C2B Paybill Business Number
    'till_number'       => '987654',           // Your Till Number (if applicable, otherwise leave blank)
    'account_prefix'    => 'GKF',              // A simple prefix for account reference (e.g., GKF-12345)
];

// --- Pesapal/Flutterwave/Stripe API Credentials ---
// Example using Pesapal structure (Replace with your chosen gateway's keys)
$config['gateway'] = [
    'name'      => 'Pesapal',
    'api_key'   => 'PK_test_xxxxxxxxxxxxxxxxxxxxxxxx', // Your Consumer/Public Key
    'api_secret'=> 'SK_test_yyyyyyyyyyyyyyyyyyyyyyyy', // Your Consumer/Secret Key
    // URL the gateway uses for transactions (use HTTPS for live)
    'checkout_url' => 'https://demo.pesapal.com/api/v3/submit-order', // Use sandbox URL for testing
    
    // The URL the payment gateway will call (WEBHOOK/IPN) after payment completion
    // MUST be accessible from the internet and protected (HTTPS required for live)
    'callback_url' => SITE_URL . '/payment_callback.php', 
];

// ===========================================
// SESSION MANAGEMENT
// ===========================================
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>