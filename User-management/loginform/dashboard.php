<?php
// dashboard.php

session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php"); // Redirect to login page if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container" style="max-width: 600px; padding: 50px;">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
        <p>This is your protected dashboard page. Congratulations on logging in!</p>
        
        <p>Your user ID is: <?php echo htmlspecialchars($_SESSION["id"]); ?></p>
        
        <a href="logout.php" class="login-button" style="display: block; width: 50%; margin: 20px auto;">Logout</a>
    </div>
</body>
</html>