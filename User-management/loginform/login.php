<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Login Form</title>   
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <div class="login-container">
        <h2>LOGIN HERE</h2>
        <form action="authenticate.php" method="POST" class="login-form">
            <label for="Email"></label>
            <input type="text" id="Email" name="Email" placeholder="Email or username" required><br><br>

            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="Password" required><br><br>

            <button type="submit" class="login-button">Login</button>
            
            <a href="forgot_password.php" class="forgot-password">Forgot Password? Reset</a>
        </form>

        <div class="social-login">
            <p>login with</p>
            
            <!-- <div class="dropdown-container">
                <button type="button" class="google-login" onclick="toggleDropdown('googleDropdown')">Google ▼</button>
                <div id="googleDropdown" class="dropdown-menu">
                    <a href="#" onclick="loginWith('Google Account')">Login with Google Account</a>
                    <a href="#" onclick="loginWith('Google Workspace')">Login with Google Workspace</a>
                    <a href="#" onclick="loginWith('Gmail')">Login with Gmail</a>
                </div>
            </div>
            
            <div class="dropdown-container">
                <button type="button" class="facebook-login" onclick="toggleDropdown('facebookDropdown')">Facebook ▼</button>
                <div id="facebookDropdown" class="dropdown-menu">
                    <a href="#" onclick="loginWith('Facebook Account')">Login with Facebook</a>
                    <a href="#" onclick="loginWith('Facebook Page')">Login with Facebook Page</a>
                    <a href="#" onclick="loginWith('Messenger')">Login with Messenger</a>
                </div> -->
            <!-- </div>
        </div> -->

        <p class="signup-link">Don't have an account? <a href="signup.php">Sign Up</a></p>
    </div>

</body>
</html>
