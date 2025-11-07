<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <div class="forgot-password-container">
        <h2>Forgot Your Password?</h2>
        <form action="reset_password.php" method="POST" class="forgot-password-form">
            <label for="email">Enter your registered email address:</label><br>
            <input type="email" id="email" name="email" placeholder="Email Address" required><br><br>
            <button type="submit" class="reset-button">Reset Password</button>
        </form>
        <p class="back-to-login">Remembered your password? <a href="index.php">Login Here</a></p>
    </div>