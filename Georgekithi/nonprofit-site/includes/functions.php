<?php
/**
 * Utility functions for George Kithi Foundation
 */

require_once 'config.php';

/**
 * Sanitize input data
 */
function sanitizeInput($data) {
    if (!is_string($data)) return $data;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Validate email address
 */
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Get program name by slug
 */
function getProgramName($slug) {
    $programs = [
        'education' => 'Education & Scholarships',
        'healthcare' => 'Healthcare Access',
        'water' => 'Clean Water Initiative',
        'sports' => 'Youth Sports Development',
        'general' => 'General Fund'
    ];
    
    return $programs[$slug] ?? 'General Fund';
}

/**
 * Format currency
 */
function formatCurrency($amount) {
    return 'KES ' . number_format($amount, 2);
}

/**
 * Get recent donations (for dashboard) - Sample data
 */
function getRecentDonations($limit = 5) {
    return [
        ['name' => 'John Doe', 'amount' => 5000, 'program' => 'education', 'date' => '2024-01-15'],
        ['name' => 'Jane Smith', 'amount' => 10000, 'program' => 'water', 'date' => '2024-01-14'],
        ['name' => 'Community Church', 'amount' => 25000, 'program' => 'general', 'date' => '2024-01-13'],
    ];
}

/**
 * Get statistics for dashboard - Sample data
 */
function getDashboardStats() {
    return [
        'total_donations' => 254800,
        'recent_donations' => 24,
        'volunteers' => 45,
        'programs' => 4
    ];
}

/**
 * Simple contact form handler
 */
function handleContactForm($name, $email, $subject, $message) {
    // For now, just return success
    // In production, you would save to database or send email
    return true;
}

/**
 * Simple donation logger
 */
function logDonation($name, $email, $amount, $program) {
    // For now, just return success
    // In production, you would save to database
    return true;
}
?>