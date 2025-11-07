<?php
// includes/footer.php
?>
</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <!-- About -->
            <div class="footer-section about">
                <h3>George Kithi Foundation</h3>
                <p>Empowering communities through education, healthcare, clean water, and sustainable development across Kithi County and beyond.</p>
            </div>

            <!-- Programs -->
            <div class="footer-section links">
                <h3>Our Programs</h3>
                <ul>
                    <li><a href="programs.php">Education & Scholarships</a></li>
                    <li><a href="programs.php">Healthcare Access</a></li>
                    <li><a href="programs.php">Clean Water Initiative</a></li>
                    <li><a href="programs.php">Youth Sports Development</a></li>
                </ul>
            </div>

            <!-- Get Involved -->
            <div class="footer-section links">
                <h3>Get Involved</h3>
                <ul>
                    <li><a href="donate.php">Make a Donation</a></li>
                    <li><a href="volunteer.php">Become a Volunteer</a></li>
                    <li><a href="contact.php">Partner With Us</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-section contact">
                <h3>Contact Info</h3>
                <p><i class="fas fa-map-marker-alt"></i> Kithi County, Kenya</p>
                <p><i class="fas fa-envelope"></i> <?php echo defined('SITE_EMAIL') ? SITE_EMAIL : 'info@georgekithifoundation.org'; ?></p>
                <p><i class="fas fa-phone"></i> <?php echo defined('SITE_PHONE') ? SITE_PHONE : '+254 XXX XXX.XXX'; ?></p>
                
                <!-- Social Links -->
                <div class="social-links">
                    <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                    <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://youtube.com" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="https://tiktok.com" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> George Kithi Foundation. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button -->
<button onclick="topFunction()" id="scrollToTopBtn" title="Go to top" aria-label="Scroll to top"><i class="fas fa-arrow-up"></i></button>

<script>
// Scroll to top button functionality
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
}

function topFunction() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
</script>

</body>
</html>

<style>
.site-footer {
    background: linear-gradient(135deg, #0b8b36 0%, #0fa84b 100%);
    color: #fff;
    padding: 60px 20px 20px;
    font-family: 'Poppins', sans-serif;
    margin-top: auto;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    margin-bottom: 40px;
}

.footer-section h3 {
    font-weight: 700;
    margin-bottom: 20px;
    font-size: 1.3rem;
    color: #fff;
    position: relative;
}

.footer-section h3::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 40px;
    height: 2px;
    background: #b9fbc0;
}

.footer-section p, 
.footer-section li, 
.footer-section a {
    color: #e9ffe9;
    font-size: 0.95rem;
    line-height: 1.6;
    text-decoration: none;
    transition: all 0.3s ease;
}

.footer-section a:hover {
    color: #fff;
    text-decoration: underline;
    transform: translateX(5px);
}

.footer-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-section ul li {
    margin-bottom: 12px;
    padding-left: 0;
    transition: transform 0.3s ease;
}

.footer-section ul li:hover {
    transform: translateX(5px);
}

.contact p {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
}

.contact p i {
    margin-right: 12px;
    color: #b9fbc0;
    width: 20px;
    text-align: center;
}

/* Social Links */
.social-links {
    margin-top: 20px;
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.social-links a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
    color: #fff;
    background: rgba(255,255,255,0.15);
    width: 42px;
    height: 42px;
    border-radius: 50%;
    transition: all 0.3s ease;
    text-decoration: none;
}

.social-links a:hover {
    background: #fff;
    color: #0b8b36;
    transform: translateY(-3px) scale(1.1);
    text-decoration: none;
}

/* Footer Bottom */
.footer-bottom {
    text-align: center;
    border-top: 1px solid rgba(255,255,255,0.2);
    padding-top: 25px;
    margin-top: 20px;
}

.footer-bottom p {
    font-size: 0.9rem;
    color: #eaffea;
    margin: 0;
}

/* Scroll to Top Button */
#scrollToTopBtn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 99;
    background: #0b8b36;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    font-size: 18px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    display: none;
}

#scrollToTopBtn:hover {
    background: #0fa84b;
    transform: translateY(-3px) scale(1.1);
    box-shadow: 0 6px 20px rgba(0,0,0,0.3);
}

/* Responsive */
@media (max-width: 768px) {
    .footer-content {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 30px;
    }
    
    .footer-section h3::after {
        left: 50%;
        transform: translateX(-50%);
    }
    
    .social-links {
        justify-content: center;
    }
    
    .contact p {
        justify-content: center;
    }
    
    #scrollToTopBtn {
        bottom: 20px;
        right: 20px;
        width: 45px;
        height: 45px;
    }
}

@media (max-width: 480px) {
    .site-footer {
        padding: 40px 15px 20px;
    }
    
    .footer-content {
        gap: 25px;
    }
}
</style>