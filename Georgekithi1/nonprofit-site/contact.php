<?php
$page_title = "Contact Us";
$current_page = "contact";

// Get inquiry type from URL if provided
$inquiry_type = isset($_GET['type']) ? $_GET['type'] : '';
$inquiry_options = [
    '' => 'General Inquiry',
    'volunteer' => 'Volunteer Opportunity',
    'partner' => 'Partnership Inquiry',
    'donation' => 'Donation Question',
    'program' => 'Program Information',
    'media' => 'Media/Press Inquiry'
];

include 'includes/header.php';
?>

<!-- Contact Hero -->
<section class="hero" style="padding: 80px 0;">
    <div class="container">
        <div class="hero-content">
            <h1>Get In Touch</h1>
            <p class="hero-subtitle">We'd love to hear from you. Reach out to learn more about our work or to get involved.</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact">
    <div class="container">
        <div class="contact-content">
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p style="margin-bottom: 2rem; color: var(--text-muted);">
                    Whether you want to support our cause, volunteer, partner with us, or simply learn more about our work, we're here to help.
                </p>
                
                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <h4 style="color: var(--primary-dark); margin-bottom: 0.25rem;">Our Office</h4>
                        <p>George Kithi Foundation<br>
                        P.O. Box 123-80108<br>
                        Kilifi Town, Kilifi County<br>
                        Kenya</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-phone"></i></div>
                    <div>
                        <h4 style="color: var(--primary-dark); margin-bottom: 0.25rem;">Phone</h4>
                        <p>+254 7XX XXX XXX<br>
                        (Kilifi Office)</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <h4 style="color: var(--primary-dark); margin-bottom: 0.25rem;">Email</h4>
                        <p>info@georgekithifoundation.org<br>
                        programs@georgekithifoundation.org</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-clock"></i></div>
                    <div>
                        <h4 style="color: var(--primary-dark); margin-bottom: 0.25rem;">Office Hours</h4>
                        <p>Monday - Friday: 9:00 AM - 5:00 PM EAT<br>
                        Saturday: 9:00 AM - 1:00 PM EAT<br>
                        Sunday: Closed</p>
                    </div>
                </div>
                
                <div style="margin-top: 2rem;">
                    <h4 style="color: var(--primary-dark); margin-bottom: 1rem;">Follow Us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/p/George-Kithi-Foundation-61556904606339/" target="_blank" rel="noopener" aria-label="Facebook" style="width: 50px; height: 50px; background: rgba(49, 130, 206, 0.1); color: var(--primary-blue); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-right: 0.5rem; transition: all 0.3s ease;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/georgekithifoundation/" target="_blank" rel="noopener" aria-label="Instagram" style="width: 50px; height: 50px; background: rgba(49, 130, 206, 0.1); color: var(--primary-blue); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-right: 0.5rem; transition: all 0.3s ease;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://x.com/g_kithi" target="_blank" rel="noopener" aria-label="Twitter" style="width: 50px; height: 50px; background: rgba(49, 130, 206, 0.1); color: var(--primary-blue); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <h3 style="color: var(--primary-dark); margin-bottom: 1.5rem;">Send Us a Message</h3>
                <form action="includes/contact-handler.php" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" placeholder="John Doe" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" placeholder="you@example.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="+254 XXX XXX XXX">
                    </div>
                    
                    <div class="form-group">
                        <label for="inquiry_type">Inquiry Type *</label>
                        <select id="inquiry_type" name="inquiry_type" required>
                            <?php foreach ($inquiry_options as $value => $label): ?>
                                <option value="<?php echo $value; ?>" <?php echo ($inquiry_type == $value) ? 'selected' : ''; ?>>
                                    <?php echo $label; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" placeholder="How can we help you?" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" placeholder="Tell us more about your inquiry..." required style="height: 150px;"></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Quick Links Section -->
<section class="get-involved" style="background: var(--bg-light); padding: 80px 0;">
    <div class="container">
        <div class="section-header">
            <h2>Quick Links</h2>
            <p>Find what you're looking for</p>
        </div>
        <div class="involvement-grid">
            <div class="involvement-card donate-card">
                <div class="involvement-icon"><i class="fas fa-question-circle"></i></div>
                <h3>General Questions</h3>
                <p>Have questions about our work, programs, or how to get involved? We're here to help.</p>
                <a href="about.php" class="involvement-btn">Learn More About Us</a>
            </div>
            <div class="involvement-card volunteer-card">
                <div class="involvement-icon"><i class="fas fa-hand-holding-heart"></i></div>
                <h3>Make a Donation</h3>
                <p>Support our programs and make a direct impact on communities in Kilifi County.</p>
                <a href="donate.php" class="involvement-btn">Donate Now</a>
            </div>
            <div class="involvement-card partner-card">
                <div class="involvement-icon"><i class="fas fa-book-open"></i></div>
                <h3>Our Programs</h3>
                <p>Learn more about our education, healthcare, water, and sports development initiatives.</p>
                <a href="programs.php" class="involvement-btn">View Programs</a>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (Optional - you can add Google Maps embed here) -->
<section class="mission" style="padding: 80px 0;">
    <div class="container">
        <div class="section-header">
            <h2>Visit Us</h2>
            <p>Our office is located in Kilifi Town, Kilifi County, Kenya</p>
        </div>
        <div style="background: var(--bg-light); padding: 3rem; border-radius: 20px; text-align: center;">
            <i class="fas fa-map-marked-alt" style="font-size: 4rem; color: var(--primary-blue); margin-bottom: 1rem;"></i>
            <h3 style="color: var(--primary-dark); margin-bottom: 1rem;">George Kithi Foundation Office</h3>
            <p style="color: var(--text-muted); max-width: 600px; margin: 0 auto;">
                We welcome visitors to our office in Kilifi Town. Please contact us in advance to schedule an appointment or to get directions to our location.
            </p>
            <div style="margin-top: 2rem;">
                <a href="tel:+254XXXXXXXXX" class="cta-secondary" style="background: var(--primary-blue); color: white; border: none; display: inline-flex; margin-right: 1rem;">
                    <i class="fas fa-phone"></i> Call Us
                </a>
                <a href="mailto:info@georgekithifoundation.org" class="cta-secondary" style="background: var(--primary-blue); color: white; border: none; display: inline-flex;">
                    <i class="fas fa-envelope"></i> Email Us
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>