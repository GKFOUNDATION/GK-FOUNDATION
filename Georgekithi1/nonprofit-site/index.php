<?php
// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include config safely
$config_file = 'config.php';
if (file_exists($config_file)) {
    require_once $config_file;
} else {
    // Define basic constants if config is missing
    define('SITE_NAME', 'George Kithi Foundation');
    define('SITE_EMAIL', 'info@georgekithifoundation.org');
    define('SITE_PHONE', '+254 XXX XXX XXX');
}

// Try to include functions
$functions_file = 'functions.php';
if (file_exists($functions_file)) {
    require_once $functions_file;
}

// Don't worry about database for now - we'll handle it gracefully

$page_title = SITE_NAME . " | Empowering Communities in Kilifi";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">

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
    scroll-behavior: smooth;
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
    position: fixed;
    top: 0;
    width: 100%;
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
    height: 80px;
    width: auto;
    transition: transform 0.3s ease;
    border-radius: 8px;
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
    color: white;
    font-weight: 500;
    font-size: 0.95rem;
    padding: 0.5rem 0;
    position: relative;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: var(--accent);
}

.nav-links a.active {
    color: var(--accent);
    font-weight: 600;
}

.nav-links a.active::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: var(--accent);
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

.twitter {
    background: #1da1f2;
}

.instagram {
    background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
}

.youtube {
    background: #ff0000;
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
    background: white;
    transition: all 0.3s ease;
    border-radius: 2px;
}

/* Main Content */
main {
    margin-top: 100px;
}

/* Section Styles */
.section {
    padding: 80px 0;
}

.section-alt {
    background-color: var(--background-alt);
}

.section-header {
    text-align: center;
    margin-bottom: 50px;
}

.section-header h2 {
    font-size: 2.5rem;
    color: var(--primary);
    margin-bottom: 1rem;
}

.section-header p {
    font-size: 1.2rem;
    color: var(--text-light);
    max-width: 600px;
    margin: 0 auto;
}

/* Hero Section */
.hero {
    background: linear-gradient(rgba(44, 90, 160, 0.9), rgba(44, 90, 160, 0.8)), 
                url('images/george-foundation header.jpg') center/cover no-repeat;
    color: white;
    text-align: center;
    padding: 120px 0;
    min-height: 80vh;
    display: flex;
    align-items: center;
}

.hero-content h1 {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.hero-content p {
    font-size: 1.3rem;
    margin-bottom: 2.5rem;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    opacity: 0.95;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn {
    padding: 15px 35px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    border: none;
    cursor: pointer;
}

.btn-primary {
    background: white;
    color: var(--primary);
}

.btn-primary:hover {
    background: #f8f9fa;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255,255,255,0.3);
}

.btn-secondary {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.btn-secondary:hover {
    background: white;
    color: var(--primary);
    transform: translateY(-2px);
}

/* About Section */
.about-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
}

.about-text h3 {
    color: var(--primary);
    margin-bottom: 1rem;
    font-size: 1.8rem;
}

.about-text p {
    margin-bottom: 1.5rem;
    color: var(--text-dark);
    line-height: 1.8;
}

/* Programs Grid */
.programs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.program-card {
    background: white;
    padding: 40px 30px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    border-left: 4px solid var(--primary);
}

.program-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
}

.program-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--primary), var(--accent));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    color: white;
    font-size: 2rem;
}

.program-card h3 {
    color: var(--text-dark);
    margin-bottom: 15px;
    font-size: 1.4rem;
}

.program-card p {
    color: var(--text-light);
    line-height: 1.6;
}

/* News Grid */
.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.news-card {
    background: white;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    border-top: 4px solid var(--primary);
}

.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
}

.news-date {
    color: var(--primary);
    font-weight: 600;
    margin-bottom: 15px;
    font-size: 0.9rem;
}

.news-card h3 {
    color: var(--text-dark);
    margin-bottom: 15px;
    font-size: 1.3rem;
    line-height: 1.4;
}

.news-card p {
    color: var(--text-light);
    line-height: 1.6;
}

/* Impact Stats */
.impact-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
    margin-bottom: 50px;
}

.stat-item {
    background: white;
    padding: 40px 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-5px);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: 10px;
    display: block;
}

.stat-label {
    color: var(--text-light);
    font-size: 1rem;
    font-weight: 500;
}

/* Contact Section */
.contact-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
}

.contact-info h3 {
    color: var(--primary);
    margin-bottom: 25px;
    font-size: 1.5rem;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 25px;
    padding: 15px;
    border-radius: 10px;
    transition: background-color 0.3s ease;
}

.contact-item:hover {
    background-color: var(--background-alt);
}

.contact-icon {
    background: var(--primary);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.contact-form {
    background: var(--background-alt);
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.form-group {
    margin-bottom: 25px;
}

.form-group label {
    display: block;
    font-weight: 600;
    margin-bottom: 8px;
    color: var(--text-dark);
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 15px;
    border: 2px solid var(--border);
    border-radius: 10px;
    font-size: 1rem;
    font-family: inherit;
    transition: border-color 0.3s ease;
    background: white;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: var(--primary);
    outline: none;
    box-shadow: 0 0 0 3px rgba(44, 90, 160, 0.1);
}

.form-group textarea {
    resize: vertical;
    min-height: 120px;
}

/* Footer */
.footer {
    background: var(--text-dark);
    color: white;
    padding: 60px 0 20px;
}

.footer-content {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1.5fr;
    gap: 40px;
    margin-bottom: 40px;
}

.footer-section h3 {
    color: white;
    margin-bottom: 20px;
    font-size: 1.2rem;
}

.footer-logo img {
    height: 50px;
    margin-bottom: 15px;
    border-radius: 5px;
}

.footer-section p {
    color: #bdc3c7;
    line-height: 1.6;
    margin-bottom: 20px;
}

.footer-section ul {
    list-style: none;
}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-section ul li a {
    color: #bdc3c7;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-section ul li a:hover {
    color: var(--accent);
}

.footer-bottom {
    border-top: 1px solid #34495e;
    padding-top: 20px;
    text-align: center;
    color: #95a5a6;
    font-size: 0.9rem;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .footer-content {
        grid-template-columns: 1fr 1fr;
    }
    
    .about-content {
        grid-template-columns: 1fr;
    }
    
    .contact-content {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .mobile-menu-toggle {
        display: flex;
    }
    
    .nav-links {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: var(--primary);
        flex-direction: column;
        padding: 1rem 0;
        gap: 0;
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
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
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    
    .social-icons {
        display: none;
    }
    
    .hero-content h1 {
        font-size: 2.2rem;
    }
    
    .section-header h2 {
        font-size: 2rem;
    }
    
    main {
        margin-top: 80px;
    }
    
    .section {
        padding: 60px 0;
    }
    
    .hero {
        padding: 80px 0;
        min-height: 70vh;
    }
}

@media (max-width: 480px) {
    .logo-image {
        height: 60px;
    }
    
    .hero-content h1 {
        font-size: 1.8rem;
    }
    
    .hero-content p {
        font-size: 1.1rem;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .btn {
        width: 100%;
        max-width: 300px;
        justify-content: center;
        padding: 12px 25px;
    }
    
    .footer-content {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .contact-form {
        padding: 30px 20px;
    }
    
    .programs-grid,
    .news-grid {
        grid-template-columns: 1fr;
    }
}
    </style>
</head>
<body>
   <header>
    <nav class="container">
        <div class="logo">
            <a href="#home">
                <img src="images/logo/georgekithi-foundation-logo.jpg" 
                     alt="George Kithi Foundation" 
                     class="logo-image">
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="#home" class="nav-link active">Home</a></li>
            <li><a href="#about" class="nav-link">About</a></li>
            <li><a href="#programs" class="nav-link">Programs</a></li>
            <li><a href="#news" class="nav-link">News</a></li>
            <li><a href="#impact" class="nav-link">Impact</a></li>
            <li><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
        
        <!-- Social Media Icons -->
        <div class="social-icons">
            <a href="https://facebook.com/georgekithifoundation" target="_blank" class="social-icon facebook" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/georgekithifdn" target="_blank" class="social-icon twitter" aria-label="Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://instagram.com/georgekithifoundation" target="_blank" class="social-icon instagram" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://youtube.com/georgekithifoundation" target="_blank" class="social-icon youtube" aria-label="YouTube">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
        
        <div class="mobile-menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <!-- Donate Button -->
        <a href="donate.php" class="donate-btn">
            <i class="fas fa-heart"></i> Donate Now
        </a>
    </nav>
</header>

<main>
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Empowering Communities in Kilifi County</h1>
                <p>Transforming lives through education, healthcare, clean water, and sustainable development initiatives. Join us in creating lasting change.</p>
                <div class="cta-buttons">
                    <a href="#about" class="btn btn-secondary">
                        <i class="fas fa-info-circle"></i> Learn More
                    </a>
                    <a href="donate.php" class="btn btn-primary">
                        <i class="fas fa-hand-holding-heart"></i> Support Our Cause
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="section-header">
                <h2>About George Kithi Foundation</h2>
                <p>Empowering Communities, Transforming Lives</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Our Mission</h3>
                    <p>The George Kithi Foundation is a non-profit, community-focused organization established with the overall goal of creating opportunities, promoting fairness, and raising the standard of living for people and families in Kilifi County.</p>
                    <p>Based on the values of service, compassion, and empowerment, the foundation works with communities to address some of the most difficult social and economic issues facing society.</p>
                    
                    <h3>Our Vision</h3>
                    <p>We envision a transformed Kilifi County where every individual has access to quality education, healthcare, and economic opportunities, leading to sustainable community development and prosperity for all.</p>
                    
                    <h3>Our Values</h3>
                    <p>Integrity, Compassion, Empowerment, Sustainability, and Community Collaboration guide everything we do.</p>
                </div>
                <div class="about-image">
                    <div style="background: linear-gradient(135deg, var(--primary), var(--accent)); height: 400px; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem; text-align: center; padding: 20px;">
                        <div>
                            <i class="fas fa-hands-helping" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                            <p>Building a Better Future Together</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="section section-alt">
        <div class="container">
            <div class="section-header">
                <h2>Our Programs</h2>
                <p>Comprehensive initiatives creating lasting impact in Kilifi County</p>
            </div>
            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Education Support</h3>
                    <p>Providing scholarships, school supplies, and educational support to underprivileged children across Kilifi County. We believe education is the key to breaking the cycle of poverty.</p>
                </div>
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-hospital-user"></i>
                    </div>
                    <h3>Healthcare Access</h3>
                    <p>Improving healthcare delivery through medical camps, health education, and supporting local healthcare facilities. Ensuring communities have access to quality healthcare services.</p>
                </div>
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Clean Water Initiative</h3>
                    <p>Ensuring access to clean and safe drinking water through borehole projects and water purification systems. Water is life, and every community deserves clean water.</p>
                </div>
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Community Empowerment</h3>
                    <p>Building resilient communities through skills training, income generation projects, and capacity building initiatives. Empowering communities to become self-sufficient.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="news" class="section">
        <div class="container">
            <div class="section-header">
                <h2>Latest News & Updates</h2>
                <p>Stay informed about our latest achievements and community projects</p>
            </div>
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-date">October 25, 2025</div>
                    <h3>Foundation Wins Humanitarian Award</h3>
                    <p>The George Kithi Foundation received the Humanitarian Group of the Year 2025 at the prestigious East African Super Woman Awards.</p>
                </div>
                <div class="news-card">
                    <div class="news-date">October 18, 2025</div>
                    <h3>Students in Ganze Get Lifeline</h3>
                    <p>More than 100 students in Ganze Constituency have received bursaries from the George Kithi Foundation, ensuring they can continue their education.</p>
                </div>
                <div class="news-card">
                    <div class="news-date">October 10, 2025</div>
                    <h3>Clean Water Project Launch</h3>
                    <p>New borehole project brings clean water to 500 families in remote Kilifi villages, reducing waterborne diseases and improving quality of life.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section id="impact" class="section section-alt">
        <div class="container">
            <div class="section-header">
                <h2>Our Impact</h2>
                <p>Transforming lives through empowerment and sustainable development</p>
            </div>
            <div class="impact-stats">
                <div class="stat-item">
                    <span class="stat-number">1,000+</span>
                    <div class="stat-label">Students Supported</div>
                </div>
                <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <div class="stat-label">Families Served</div>
                </div>
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <div class="stat-label">Communities Reached</div>
                </div>
                <div class="stat-item">
                    <span class="stat-number">5</span>
                    <div class="stat-label">Water Projects Completed</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <div class="section-header">
                <h2>Contact Us</h2>
                <p>Get in touch to learn more about our work or partnership opportunities</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Our Headquarters</h3>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <p><strong>George Kithi Foundation</strong></p>
                            <p>P.O. Box 123-80108, Kilifi Town, Kenya</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <p><?php echo SITE_PHONE; ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <p><?php echo SITE_EMAIL; ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <p><strong>Office Hours</strong></p>
                            <p>Monday - Friday: 8:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Your Name *</label>
                            <input type="text" id="name" name="name" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email *</label>
                            <input type="email" id="email" name="email" placeholder="you@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="How can we help you?">
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" placeholder="I'd like to learn more about your programs..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <div class="footer-logo">
                    <img src="images/logo/georgekithi-foundation-logo.jpg" alt="George Kithi Foundation">
                </div>
                <p>Empowering communities through education, healthcare, clean water, and sustainable development across Kilifi County and beyond. Together, we can create lasting change.</p>
                <div class="social-icons">
                    <a href="https://facebook.com/georgekithifoundation" target="_blank" class="social-icon facebook" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/georgekithifdn" target="_blank" class="social-icon twitter" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://instagram.com/georgekithifoundation" target="_blank" class="social-icon instagram" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://youtube.com/georgekithifoundation" target="_blank" class="social-icon youtube" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Our Programs</h3>
                <ul>
                    <li><a href="#programs">Education Support</a></li>
                    <li><a href="#programs">Healthcare Access</a></li>
                    <li><a href="#programs">Clean Water Initiative</a></li>
                    <li><a href="#programs">Community Empowerment</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#news">News & Updates</a></li>
                    <li><a href="#impact">Our Impact</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Info</h3>
                <p><i class="fas fa-map-marker-alt"></i> Kilifi County, Kenya</p>
                <p><i class="fas fa-envelope"></i> <?php echo SITE_EMAIL; ?></p>
                <p><i class="fas fa-phone"></i> <?php echo SITE_PHONE; ?></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> George Kithi Foundation. All rights reserved. | Empowering Communities, Transforming Lives</p>
        </div>
    </div>
</footer>

<script>
// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const navLinks = document.querySelector('.nav-links');
    
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            this.classList.toggle('active');
        });
    }

    // Smooth scrolling for navigation links
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                // Update active class
                document.querySelectorAll('.nav-link').forEach(nav => nav.classList.remove('active'));
                this.classList.add('active');
                
                // Close mobile menu if open
                if (navLinks.classList.contains('active')) {
                    navLinks.classList.remove('active');
                    mobileMenuToggle.classList.remove('active');
                }
                
                // Scroll to section
                const offsetTop = targetSection.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Update active nav link on scroll
    window.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');
        
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            
            if (window.scrollY >= (sectionTop - 100)) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });

    // Contact form handling
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('.btn');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;
            
            // Simulate form submission
            setTimeout(() => {
                alert('Thank you for your message! We will get back to you soon.');
                this.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });
    }

    // Add fade-in animation to elements when they come into view
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.program-card, .news-card, .stat-item').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

// Simple counter animation for stats
function animateCounter(element, target, duration = 2000) {
    let start = 0;
    const increment = target / (duration / 16);
    const timer = setInterval(() => {
        start += increment;
        if (start >= target) {
            element.textContent = target + '+';
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(start) + '+';
        }
    }, 16);
}

// Animate counters when impact section is in view
const impactObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            document.querySelectorAll('.stat-number').forEach(stat => {
                const target = parseInt(stat.textContent);
                animateCounter(stat, target);
            });
            impactObserver.disconnect();
        }
    });
});

const impactSection = document.getElementById('impact');
if (impactSection) {
    impactObserver.observe(impactSection);
}
</script>
</body>
</html>