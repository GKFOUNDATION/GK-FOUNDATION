<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Sign Up</title>   
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Sign Up</h2>
        <!-- <form action="register.php" method="POST" class="login-form"> -->
            <label for="First Name"></label>
            <input type="text" id="First Name" name="First Name" placeholder="First Name" required><br><br>

            <label for="Last Name"></label>
            <input type="text" id="Last Name" name="Last Name" placeholder="Last Name" required><br><br>

            <label for="Username"></label>
            <input type="text" id="Username" name="Username" placeholder="Username" required><br><br>

            <label for="Gender"></label>
            <input type="text" id="Gender" name="Gender" placeholder="Gender" required><br><br>

            <label for="Email"></label>
            <input type="text" id="Email" name="Email" placeholder="Email or username" required><br><br>

            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="Password" required><br><br>

            <label for="confirm password"></label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required><br><br>


            <button type="submit" class="login-button">Sign Up</button>
        </form>

        <p class="signup-link">Already have an account? <a href="index.php">Login</a></p>
    </div>

</body>
</html>
