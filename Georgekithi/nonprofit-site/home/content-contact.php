<!-- Hero Section -->
<section class="page-hero">
    <div class="container text-center text-white">
        <h1>Contact Us</h1>
        <p>Get in touch to learn more about our work or partnership opportunities</p>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="section-header text-center">
            <h2>We’d Love to Hear From You</h2>
            <p>Reach out to us for inquiries, partnerships, or support opportunities</p>
        </div>

        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-info">
                <h3>Our Headquarters</h3>
                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <p>George Kithi Foundation</p>
                        <p>P.O. Box 123-80108, Kilifi Town, Kenya</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-phone"></i></div>
                    <p>+254 XXX XXX XXX</p>
                </div>

                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                    <p>info@georgekithifoundation.org</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <form action="contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="John Doe" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="you@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="I'd like to learn more about your programs..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Page Styles -->
<style>
/* Base Layout */
body {
    font-family: 'Poppins', sans-serif;
    background: #ffffff;
    margin: 0;
    padding: 0;
}

/* Hero */
.page-hero {
    background-image: url("images/logo/george-foundation header.jpg");
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 100px 0 80px;
    text-align: center;
    position: relative;
}

.page-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.45);
}
.page-hero h1 {
    font-size: 3rem;
    font-weight: 700;
    position: relative;
    z-index: 2;
}
.page-hero p {
    position: relative;
    z-index: 2;
    color: #e0f7ea;
}

/* Contact Section */
.contact-section {
    background: #ffffff;
    padding: 80px 0 100px;
}

.section-header h2 {
    color: #0b8b36;
    font-weight: 700;
    font-size: 2.5rem;
}
.section-header p {
    color: #6c757d;
    margin-bottom: 50px;
}

/* Contact Grid */
.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
}

.contact-info h3 {
    color: #0b8b36;
    font-weight: 700;
    margin-bottom: 25px;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 20px;
}

.contact-icon {
    background: linear-gradient(135deg, #0b8b36, #0fa84b);
    color: #fff;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
}

.contact-item p {
    margin: 0;
    color: #2c3e50;
}

/* Contact Form */
.contact-form {
    background: #f9f9f9;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: 600;
    color: #2c3e50;
    display: block;
    margin-bottom: 8px;
}

input, textarea {
    width: 100%;
    padding: 15px;
    border: 2px solid #e1e8ed;
    border-radius: 10px;
    transition: 0.3s;
}

input:focus, textarea:focus {
    border-color: #0b8b36;
    outline: none;
    box-shadow: 0 0 0 3px rgba(11,139,54,0.15);
}

textarea {
    height: 150px;
    resize: vertical;
}

.submit-btn {
    background: linear-gradient(135deg, #0b8b36, #0fa84b);
    color: #fff;
    border: none;
    padding: 15px;
    border-radius: 10px;
    font-weight: 600;
    width: 100%;
    cursor: pointer;
    transition: 0.3s;
}
.submit-btn:hover {
    background: linear-gradient(135deg, #0a7a2f, #0e9742);
    transform: translateY(-2px);
}

/* Fix Footer Overlap */
.contact-section {
    margin-bottom: 0;
    padding-bottom: 120px;
    position: relative;
    z-index: 1;
}

/* Responsive */
@media (max-width: 992px) {
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    .contact-form {
        padding: 25px;
    }
    .page-hero h1 {
        font-size: 2.4rem;
    }
}
</style>