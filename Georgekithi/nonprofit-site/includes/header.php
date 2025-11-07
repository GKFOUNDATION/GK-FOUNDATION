<?php
// Start session and include config without breaking on db errors
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include config (no database dependency)
require_once 'config.php';

// Try to include db, but don't break if it fails
try {
    require_once 'db.php';
} catch (Exception $e) {
    // Database connection failed, but we can still load the page
    error_log("Database warning: " . $e->getMessage());
}

// Include functions (updated to not depend on db)
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> | Empowering Communities in Kilifi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
:root {
    --primary: #2c5aa0;
    --primary-dark: #1e3d72;
    --secondary: #e74c3c;
    --secondary-dark: #c0392b;
    --accent: #3498db;
    --text-dark: #2c3e50;
    --text-light: #7f8c8d;
    --background: #ffffff;
    --background-alt: #f8f9fa;
    --border: #e1e8ed;
    --shadow: rgba(0, 0, 0, 0.1);
    --success: #27ae60;
    --warning: #f39c12;
    --error: #e74c3c;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    line-height: 1.6;
    color: var(--text-dark);
    background-color: var(--background);
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Header Styles */
header {
    background: linear-gradient(90deg, 
        #1a7f5f 0%,      /* Green */
        #e8b339 33%,     /* Golden */
        #b84942 50%,     /* Red */
        #4a90a4 66%,     /* Blue */
        #1a7f5f 100%     /* Green */
    );
    box-shadow: 0 2px 20px rgba(0,0,0,0.15);
    position: sticky;
    top: 0;
    z-index: 1000;
    backdrop-filter: blur(10px);
}

header nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 0;
    position: relative;
}

/* Logo Styles */
.logo {
    flex-shrink: 0;
}

.logo-image {
    height: 130px;
    width: auto;
    transition: transform 0.3s ease;
}

.logo-image:hover {
    transform: scale(1.05);
}

/* Navigation Links */
.nav-links {
    display: flex;
    list-style: none;
    gap: 2rem;
    align-items: center;
}

.nav-links a {
    text-decoration: none;
    color: var(--text-dark);
    font-weight: 500;
    font-size: 0.95rem;
    padding: 0.5rem 0;
    position: relative;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: var(--primary);
}

.nav-links a.active {
    color: var(--primary);
    font-weight: 600;
}

.nav-links a.active::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: var(--primary);
    border-radius: 2px;
}

/* Social Media Icons */
.social-icons {
    display: flex;
    gap: 0.75rem;
    align-items: center;
    margin-left: 2rem;
}

.social-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 1rem;
}

.social-icon:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.facebook {
    background: #3b5998;
}

.facebook:hover {
    background: #344e86;
}

.twitter {
    background: #1da1f2;
}

.twitter:hover {
    background: #1a8cd8;
}

.instagram {
    background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
}

.instagram:hover {
    background: linear-gradient(45deg, #da832c, #d45a2f, #c4243a, #b31f5c, #a31578);
}

.youtube {
    background: #ff0000;
}

.youtube:hover {
    background: #e60000;
}

/* Donate Button */
.donate-btn {
    background: linear-gradient(135deg, var(--secondary), var(--secondary-dark));
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-left: 2rem;
    box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);
}

.donate-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(231, 76, 60, 0.4);
    background: linear-gradient(135deg, var(--secondary-dark), #a83224);
}

/* Mobile Menu Toggle */
.mobile-menu-toggle {
    display: none;
    flex-direction: column;
    cursor: pointer;
    gap: 4px;
}

.mobile-menu-toggle span {
    width: 25px;
    height: 3px;
    background: var(--text-dark);
    transition: all 0.3s ease;
    border-radius: 2px;
}

/* Main Content */
main {
    min-height: calc(100vh - 80px);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .nav-links {
        gap: 1.5rem;
    }
    
    .social-icons {
        margin-left: 1.5rem;
    }
    
    .donate-btn {
        margin-left: 1.5rem;
    }
}

@media (max-width: 768px) {
    header nav {
        flex-wrap: wrap;
    }
    
    .mobile-menu-toggle {
        display: flex;
        order: 2;
    }
    
    .nav-links {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: var(--background);
        flex-direction: column;
        padding: 1rem 0;
        box-shadow: 0 5px 20px var(--shadow);
        gap: 0;
    }
    
    .nav-links.active {
        display: flex;
    }
    
    .nav-links li {
        width: 100%;
    }
    
    .nav-links a {
        display: block;
        padding: 1rem 2rem;
        border-bottom: 1px solid var(--border);
    }
    
    .nav-links a.active::after {
        display: none;
    }
    
    .nav-links a.active {
        background: var(--background-alt);
    }
    
    .social-icons {
        display: none;
    }
    
    .donate-btn {
        margin-left: auto;
        order: 3;
    }
    
    .logo {
        order: 1;
        flex: 1;
    }
}

@media (max-width: 480px) {
    .container {
        width: 95%;
    }
    
    .logo-image {
        height: 40px;
    }
    
    .donate-btn {
        padding: 0.6rem 1.2rem;
        font-size: 0.85rem;
    }
    
    .nav-links a {
        padding: 0.8rem 1.5rem;
    }
}

/* Utility Classes */
.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}

/* Loading States */
.loading {
    opacity: 0.7;
    pointer-events: none;
}

/* Focus Styles for Accessibility */
a:focus-visible,
button:focus-visible {
    outline: 2px solid var(--accent);
    outline-offset: 2px;
}

/* Print Styles */
@media print {
    header {
        box-shadow: none;
        position: static;
    }
    
    .donate-btn,
    .social-icons {
        display: none;
    }
}
    </style>
</head>
<body>
   <header>
    <nav class="container">
        <div class="logo">
            <a href="index.php">
                <img src="images/logo/georgekithi-foundation-logo.jpg" 
                     alt="George Kithi Foundation" 
                     class="logo-image">
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
            <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About</a></li>
            <li><a href="programs.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'programs.php' ? 'active' : ''; ?>">Programs</a></li>
            <li><a href="news.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'news.php' ? 'active' : ''; ?>">News</a></li>
            <li><a href="impact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'impact.php' ? 'active' : ''; ?>">Impact</a></li>
            <li><a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
        </ul>
        
        <!-- Social Media Icons -->
        <div class="social-icons">
            <a href="https://facebook.com/yourpage" target="_blank" class="social-icon facebook" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/yourprofile" target="_blank" class="social-icon twitter" aria-label="Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://instagram.com/yourprofile" target="_blank" class="social-icon instagram" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://youtube.com/yourchannel" target="_blank" class="social-icon youtube" aria-label="YouTube">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
        
        <div class="mobile-menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <!-- Donate Button (Standalone - NOT in nav-links) -->
        <a href="donate.php" class="donate-btn">
            <i class="fas fa-heart"></i> Donate Now
        </a>
        </div>
    </nav>
</header>
