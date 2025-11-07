<?php
// index.php
require_once __DIR__ . '/includes/db.php';
include __DIR__ . '/includes/header.php';
?>

<style>
/* Hero Section with Background Image */
.hero {
    background-image: url("images/logo/george-foundation header.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 120px 20px;
    text-align: center;
    color: white;
    position: relative;
    min-height: 500px;
}

/* Add overlay for better text readability */
.hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.4); /* Dark overlay */
    z-index: 1;
}

.hero .container {
    position: relative;
    z-index: 2;
}

.hero-content h1 {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.hero-subtitle {
    font-size: 1.3rem;
    margin-bottom: 30px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
}

.hero-cta {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-primary, .cta-secondary {
    padding: 15px 35px;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.cta-primary {
    background: #e74c3c;
    color: white;
    border: none;
}

.cta-primary:hover {
    background: #c0392b;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(231, 76, 60, 0.4);
}

.cta-secondary {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.cta-secondary:hover {
    background: white;
    color: #3498db;
    transform: translateY(-2px);
}

/* Enhanced Impact Stats Section */
.impact-stats {
    background: linear-gradient(135deg, 
        #1a7f5f 0%,      /* Green */
        #e8b339 25%,     /* Golden */
        #b84942 50%,     /* Red */
        #4a90a4 75%,     /* Blue */
        #1a7f5f 100%     /* Green */
    );
    background-size: 400% 400%;
    padding: 60px 20px;
    animation: gradientShift 15s ease infinite;
    position: relative;
    overflow: hidden;
}

@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.impact-stats::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
    opacity: 0.3;
}

.stats-header {
    text-align: center;
    margin-bottom: 40px;
    color: white;
}

.stats-header h2 {
    font-size: 2.5rem;
    margin-bottom: 15px;
    font-weight: 700;
}

.stats-header p {
    font-size: 1.2rem;
    max-width: 700px;
    margin: 0 auto;
    opacity: 0.9;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
    max-width: 1100px;
    margin: 0 auto;
}

.stat-item {
    background: rgba(255, 255, 255, 0.95);
    padding: 30px 20px;
    border-radius: 16px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.stat-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, #1a7f5f, #e8b339, #b84942, #4a90a4);
}

.stat-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
}

.stat-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 15px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    color: white;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.stat-item:nth-child(1) .stat-icon {
    background: linear-gradient(135deg, #1a7f5f, #27ae60);
}

.stat-item:nth-child(2) .stat-icon {
    background: linear-gradient(135deg, #e8b339, #f39c12);
}

.stat-item:nth-child(3) .stat-icon {
    background: linear-gradient(135deg, #b84942, #e74c3c);
}

.stat-item:nth-child(4) .stat-icon {
    background: linear-gradient(135deg, #4a90a4, #3498db);
}

.stat-number {
    font-size: 2.8rem;
    font-weight: 800;
    display: block;
    margin-bottom: 8px;
    background: linear-gradient(90deg, #1a7f5f, #e8b339, #b84942, #4a90a4);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    line-height: 1;
}

.stat-label {
    font-size: 1.1rem;
    color: #555;
    line-height: 1.4;
    font-weight: 500;
}

.stat-description {
    font-size: 0.9rem;
    color: #777;
    margin-top: 10px;
    line-height: 1.4;
}

.stats-footer {
    text-align: center;
    margin-top: 40px;
    color: white;
    font-size: 1.1rem;
    opacity: 0.9;
}

.fade-in {
    animation: fadeIn 1s ease-in;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Responsive Design for Stats */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        max-width: 500px;
    }
    
    .stat-item {
        padding: 20px 15px;
    }
    
    .stat-number {
        font-size: 2rem;
    }
    
    .stat-label {
        font-size: 0.9rem;
    }
    
    .stats-header h2 {
        font-size: 2rem;
    }
    
    .stats-header p {
        font-size: 1rem;
    }
    
    .stat-icon {
        width: 50px;
        height: 50px;
        font-size: 1.3rem;
    }
}

@media (max-width: 480px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .stat-number {
        font-size: 2.2rem;
    }
}
</style>

<!-- Hero Section with Background Image -->
<section id="home" class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Empowering Communities through education, healthcare and social programs</h1>
            <p class="hero-subtitle">Join us in our mission to improve livelihoods through various initiatives in Kilifi County, Kenya</p>
            <div class="hero-cta">
                <a href="donate.php" class="cta-primary">❤️ Support Our Cause</a>
                <a href="about.php" class="cta-secondary">📚 Learn More</a>
            </div>
        </div>
    </div>
</section>

<section id="about" class="content-section">
    <div class="container">
        <?php require_once __DIR__ . '/home/content-about.php'; ?>
    </div>
</section>

<section id="programs" class="content-section section-alt">
    <div class="container">
        <?php require_once __DIR__ . '/home/content-programs.php'; ?>
    </div>
</section>

<section id="news" class="content-section">
    <div class="container">
        <?php require_once __DIR__ . '/home/content-news.php'; ?>
    </div>
</section>

<section id="impact" class="content-section section-alt">
    <div class="container">
        <?php require_once __DIR__ . '/home/content-impact.php'; ?>
    </div>
</section>

<section id="contact" class="content-section">
    <div class="container">
        <?php require_once __DIR__ . '/home/content-contact.php'; ?>
    </div>
</section>
<section id="contact" class="content-section">
    <div class="container">
        <?php require_once __DIR__ . '/home/content-contact.php'; ?>
    </div>
</section>
<section id="donate" class="content-section section-alt">
    <div class="container">
        <?php require_once __DIR__ . '/home/content-donate.php'; ?>
    </div>

<!-- Include the global footer -->
<?php include __DIR__ . '/includes/footer.php'; ?>

