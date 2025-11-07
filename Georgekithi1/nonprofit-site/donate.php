<?php
$page_title = "Contact Us - George Kithi Foundation";
include 'includes/header.php';

// Contact form processing would go here
?>

<!-- Green Hero Header -->
<section class="page-hero text-center text-white d-flex flex-column align-items-center justify-content-center position-relative">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch to learn more about our work or partnership opportunities</p>
    </div>
</section>

<!-- Contact Section -->
<section class="contact py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>We'd Love to Hear From You</h2>
            <p>Reach out to us for inquiries, partnerships, or support opportunities</p>
        </div>

        <div class="contact-content">
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
                    <div>
                       <p><?php echo SITE_PHONE; ?></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <p><?php echo SITE_EMAIL; ?></p>
                    </div>
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
                    <button type="submit" class="submit-btn"><i class="fas fa-paper-plane"></i> Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Styles -->
<style>
/* === Green Hero Header === */
.page-hero {
     background-image: url("images/logo/george-foundation header.jpg");
    min-height: 300px;
    position: relative;
    overflow: hidden;
    padding: 80px 20px;
}

.page-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
    opacity: 0.3;
}

.page-hero h1 {
    font-size: 2.8rem;
    font-weight: 800;
    margin-bottom: 15px;
    color: #fff;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.page-hero p {
    font-size: 1.1rem;
    color: #eaffea;
    max-width: 700px;
    margin: 0 auto;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
}

/* === Contact Section === */
.contact {
    padding: 80px 0;
    background: #ffffff;
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-header h2 {
    font-size: 2.5rem;
    color: #2c3e50;
    margin-bottom: 1rem;
    font-weight: 700;
}

.section-header p {
    font-size: 1.2rem;
    color: #7f8c8d;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.contact-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: start;
    max-width: 1200px;
    margin: 0 auto;
}

.contact-info h3 {
    color: #0b8b36;
    font-weight: 700;
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
    transition: all 0.3s ease;
}

.contact-item:hover {
    background: #f8f9fa;
    transform: translateX(5px);
}

.contact-icon {
    background: #0b8b36;
    color: #fff;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    flex-shrink: 0;
    box-shadow: 0 4px 15px rgba(11, 139, 54, 0.3);
    transition: all 0.3s ease;
}

.contact-item:hover .contact-icon {
    background: #0fa84b;
    transform: scale(1.1);
}

.contact-item p {
    margin: 0;
    color: #2c3e50;
    line-height: 1.5;
}

.contact-item p:first-child {
    font-weight: 600;
    margin-bottom: 5px;
}

/* Contact Form */
.contact-form {
    background: #f8f9fa;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border: 1px solid #e9ecef;
}

.contact-form .form-group {
    margin-bottom: 25px;
}

.contact-form label {
    display: block;
    font-weight: 600;
    margin-bottom: 8px;
    color: #2c3e50;
    font-size: 1rem;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 15px;
    border: 2px solid #e1e8ed;
    border-radius: 10px;
    font-size: 1rem;
    font-family: inherit;
    transition: all 0.3s ease;
    background: white;
}

.contact-form input:focus,
.contact-form textarea:focus {
    border-color: #0b8b36;
    outline: none;
    box-shadow: 0 0 0 3px rgba(11, 139, 54, 0.1);
}

.contact-form textarea {
    height: 150px;
    resize: vertical;
    line-height: 1.5;
}

.submit-btn {
    background: linear-gradient(135deg, #0b8b36, #0fa84b);
    color: #fff;
    border: none;
    padding: 15px 30px;
    border-radius: 10px;
    font-weight: 600;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    width: 100%;
    box-shadow: 0 4px 15px rgba(11, 139, 54, 0.3);
}

.submit-btn i {
    margin-right: 10px;
}

.submit-btn:hover {
    background: linear-gradient(135deg, #0a7a2f, #0e9742);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(11, 139, 54, 0.4);
}

.submit-btn:active {
    transform: translateY(0);
}

/* Responsive Design */
@media (max-width: 992px) {
    .contact-content {
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .contact-info {
        text-align: center;
    }

    .contact-item {
        justify-content: center;
        text-align: center;
        flex-direction: column;
        gap: 10px;
    }

    .contact-form {
        padding: 30px;
    }
}

@media (max-width: 768px) {
    .page-hero {
        min-height: 250px;
        padding: 60px 20px;
    }
    
    .page-hero h1 {
        font-size: 2.2rem;
    }
    
    .page-hero p {
        font-size: 1rem;
    }
    
    .section-header h2 {
        font-size: 2rem;
    }
    
    .section-header p {
        font-size: 1.1rem;
    }
    
    .contact {
        padding: 60px 0;
    }
}

@media (max-width: 480px) {
    .page-hero h1 {
        font-size: 1.8rem;
    }
    
    .contact-form {
        padding: 20px;
    }
    
    .contact-icon {
        width: 45px;
        height: 45px;
        font-size: 1.1rem;
    }
    
    .submit-btn {
        padding: 12px 25px;
        font-size: 1rem;
    }
}

/* Animation for contact items */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.contact-item {
    animation: fadeInUp 0.6s ease-out;
}

.contact-item:nth-child(1) { animation-delay: 0.1s; }
.contact-item:nth-child(2) { animation-delay: 0.2s; }
.contact-item:nth-child(3) { animation-delay: 0.3s; }
</style>