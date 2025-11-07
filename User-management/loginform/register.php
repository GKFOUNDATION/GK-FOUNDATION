<?php
// register.php

session_start();

// Database Configuration (use the same as authenticate.php)
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'your_db_user');
define('DB_PASSWORD', 'your_db_password');
define('DB_NAME', 'your_database');

// --- 1. Database Connection ---
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check for POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // --- 2. Sanitize and Validate Input ---
    $first_name = trim($_POST['first_name'] ?? '');
    $last_name = trim($_POST['last_name'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $gender = trim($_POST['gender'] ?? '');
    $email = trim($_POST['email'] ?? ''); // Assuming the email field name is 'email'
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    
    // Simple Server-side validation
    if ($password !== $confirm_password) {
        $_SESSION['signup_error'] = "Passwords do not match.";
        header("location: signup.php");
        exit;
    }

    // Hash the password securely
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // --- 3. Check if User Exists ---
    $sql_check = "SELECT id FROM users WHERE username = ? OR email = ?";
    if ($stmt_check = $conn->prepare($sql_check)) {
        $stmt_check->bind_param("ss", $username, $email);
        $stmt_check->execute();
        $stmt_check->store_result();
        
        if ($stmt_check->num_rows > 0) {
            $_SESSION['signup_error'] = "Username or Email already taken.";
            header("location: signup.php");
            exit;
        }
        $stmt_check->close();
    }
    
    // --- 4. Insert New User ---
    $sql_insert = "INSERT INTO users (first_name, last_name, username, gender, email, password_hash) VALUES (?, ?, ?, ?, ?, ?)";
    
    if ($stmt_insert = $conn->prepare($sql_insert)) {
        $stmt_insert->bind_param("ssssss", $first_name, $last_name, $username, $gender, $email, $hashed_password);
        
        if ($stmt_insert->execute()) {
            $_SESSION['success_message'] = "Registration successful! You can now log in.";
            header("location: index.php"); // Redirect to login page
        } else {
            $_SESSION['signup_error'] = "Error: Could not register user. Try again later.";
            header("location: signup.php");
        }
        $stmt_insert->close();
    }
}

$conn->close();
exit;
?>