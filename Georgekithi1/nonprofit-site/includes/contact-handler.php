<?php
/**
 * Contact Form Handler
 * George Kithi Foundation
 * 
 * This script processes contact form submissions
 * You'll need to configure your email settings below
 */

// Start session for form feedback
session_start();

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize and validate input
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = isset($_POST['phone']) ? filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING) : '';
    $inquiry_type = isset($_POST['inquiry_type']) ? filter_var(trim($_POST['inquiry_type']), FILTER_SANITIZE_STRING) : 'General Inquiry';
    $subject = isset($_POST['subject']) ? filter_var(trim($_POST['subject']), FILTER_SANITIZE_STRING) : '';
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        $_SESSION['error'] = "Please fill in all required fields.";
        header("Location: ../contact.php");
        exit;
    }
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Please enter a valid email address.";
        header("Location: ../contact.php");
        exit;
    }
    
    // === EMAIL CONFIGURATION ===
    // Update these with your actual email settings
    $to = "info@georgekithifoundation.org"; // Your foundation email
    $from = $email;
    $email_subject = "Contact Form: " . $subject;
    
    // Create email body
    $email_body = "You have received a new message from the George Kithi Foundation website.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    if (!empty($phone)) {
        $email_body .= "Phone: $phone\n";
    }
    $email_body .= "Inquiry Type: $inquiry_type\n";
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message\n";
    
    // Email headers
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Success - save to database (optional)
        saveToDatabase($name, $email, $phone, $inquiry_type, $subject, $message);
        
        $_SESSION['success'] = "Thank you for contacting us! We'll get back to you soon.";
        header("Location: ../contact.php?success=1");
        exit;
    } else {
        $_SESSION['error'] = "Sorry, there was an error sending your message. Please try again or contact us directly at info@georgekithifoundation.org";
        header("Location: ../contact.php");
        exit;
    }
    
} else {
    // Not a POST request, redirect to contact page
    header("Location: ../contact.php");
    exit;
}

/**
 * Optional function to save contact form submissions to database
 * You'll need to configure your database connection
 */
function saveToDatabase($name, $email, $phone, $inquiry_type, $subject, $message) {
    // Database configuration
    // Uncomment and configure these when you set up your database
    /*
    $servername = "localhost";
    $username = "your_database_username";
    $password = "your_database_password";
    $dbname = "your_database_name";
    
    try {
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare SQL statement
        $sql = "INSERT INTO contact_submissions (name, email, phone, inquiry_type, subject, message, submitted_at) 
                VALUES (:name, :email, :phone, :inquiry_type, :subject, :message, NOW())";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':inquiry_type', $inquiry_type);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        
        $stmt->execute();
        
        $conn = null;
    } catch(PDOException $e) {
        // Log error (don't show to user)
        error_log("Database Error: " . $e->getMessage());
    }
    */
}

/**
 * Database Table Schema (for reference)
 * Run this SQL to create the contact_submissions table:
 * 
 * CREATE TABLE contact_submissions (
 *     id INT AUTO_INCREMENT PRIMARY KEY,
 *     name VARCHAR(255) NOT NULL,
 *     email VARCHAR(255) NOT NULL,
 *     phone VARCHAR(50),
 *     inquiry_type VARCHAR(100),
 *     subject VARCHAR(255),
 *     message TEXT NOT NULL,
 *     submitted_at DATETIME NOT NULL,
 *     status ENUM('new', 'read', 'responded') DEFAULT 'new',
 *     INDEX(submitted_at),
 *     INDEX(status)
 * );
 */
?>