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

<?php include __DIR__ . '/includes/footer.php'; ?>