<?php
// reset_password.php

session_start();

// Database Configuration (use the same as authenticate.php)
define('DB_SERVER', 'localhost');
// ... (rest of your database constants) ...

$token = $_GET['token'] ?? '';
$message = '';
$show_form = false;

if (empty($token)) {
    $message = "Invalid or missing reset token.";
} else {
    // --- 1. Database Connection ---
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // --- 2. Token Validation ---
    $sql = "SELECT user_id, expiry_time FROM password_resets WHERE token = ? AND expiry_time > NOW()";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $token);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($user_id, $expiry_time);
            $stmt->fetch();
            $show_form = true;
            // Store user_id and token in session for POST handling
            $_SESSION['reset_user_id'] = $user_id;
            $_SESSION['reset_token'] = $token;
        } else {
            $message = "The reset link is invalid or has expired.";
        }
        $stmt->close();
    }

    // --- 3. Handle New Password Submission ---
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $show_form) {
        $new_password = $_POST['new_password'] ?? '';
        $confirm_password = $_POST['confirm_password'] ?? '';
        
        if ($new_password !== $confirm_password) {
            $message = "Passwords do not match.";
        } else {
            // Hash the new password
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            
            // Update user password
            $sql_update = "UPDATE users SET password_hash = ? WHERE id = ?";
            if ($stmt_update = $conn->prepare($sql_update)) {
                $stmt_update->bind_param("si", $hashed_password, $_SESSION['reset_user_id']);
                if ($stmt_update->execute()) {
                    // Delete the used token
                    $sql_delete = "DELETE FROM password_resets WHERE token = ?";
                    $conn->prepare($sql_delete)->bind_param("s", $_SESSION['reset_token'])->execute();
                    
                    $message = "Your password has been reset successfully. You can now log in.";
                    $show_form = false; // Hide form after success
                } else {
                    $message = "Error updating password.";
                }
                $stmt_update->close();
            }
        }
    }
    $conn->close();
}

// The HTML for the reset page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Reset Password</h2>
        
        <?php if ($message): ?>
            <div class="message-container <?php echo strpos($message, 'success') !== false ? 'success-message' : 'error-message'; ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <?php if ($show_form): ?>
            <form action="reset_password.php?token=<?php echo htmlspecialchars($token); ?>" method="POST" class="login-form">
                <label for="new_password">New Password</label>
                <input type="password" id="new_password" name="new_password" placeholder="New Password" required><br><br>

                <label for="confirm_password">Confirm New Password</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required><br><br>

                <button type="submit" class="login-button">Set New Password</button>
            </form>
        <?php endif; ?>

        <p class="back-to-login"><a href="index.php">Back to Login</a></p>
    </div>
</body>
</html>