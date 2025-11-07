<style>
/* Page Hero Section */
.page-hero {
    background-image: url("images/logo/george-foundation header.jpg");
    color: white;
    padding: 100px 0 80px;
    text-align: center;
    position: relative;
    overflow: hidden;
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
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.page-hero p {
    font-size: 1.3rem;
    max-width: 700px;
    margin: 0 auto;
    opacity: 0.9;
    line-height: 1.6;
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

/* Success Stories Section */
.success-stories {
    padding: 80px 0;
    background: #ffffff;
}

.success-stories.dynamic-stories {
    background: #f8f9fa;
    padding: 60px 0;
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-header h2 {
    font-size: 2.8rem;
    color: #2c3e50;
    margin-bottom: 1rem;
    font-weight: 700;
}

.section-header p {
    font-size: 1.2rem;
    color: #7f8c8d;
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Stories Grid */
.stories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

/* Story Card */
.story-card {
    background: white;
    border-radius: 20px;
    padding: 2.5rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    border: 1px solid #f1f3f4;
}

.story-card::before {
    content: '"';
    position: absolute;
    top: 20px;
    right: 25px;
    font-size: 6rem;
    color: #f8f9fa;
    font-family: Georgia, serif;
    line-height: 1;
    z-index: 1;
}

.story-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.12);
}

.story-text {
    position: relative;
    z-index: 2;
    font-size: 1.1rem;
    line-height: 1.7;
    color: #2c3e50;
    margin-bottom: 2rem;
    font-style: italic;
}

.story-author {
    display: flex;
    align-items: center;
    gap: 1rem;
    position: relative;
    z-index: 2;
}

.author-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, #1a7f5f, #2c5aa0);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 700;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.author-info h4 {
    color: #2c3e50;
    margin-bottom: 0.3rem;
    font-weight: 600;
    font-size: 1.1rem;
}

.author-info p {
    color: #7f8c8d;
    font-size: 0.9rem;
    margin: 0;
}

/* Color Variations for Story Cards */
.stories-grid .story-card:nth-child(1) {
    border-top: 4px solid #1a7f5f;
}

.stories-grid .story-card:nth-child(1) .author-avatar {
    background: linear-gradient(135deg, #1a7f5f, #27ae60);
}

.stories-grid .story-card:nth-child(2) {
    border-top: 4px solid #e8b339;
}

.stories-grid .story-card:nth-child(2) .author-avatar {
    background: linear-gradient(135deg, #e8b339, #f39c12);
}

.stories-grid .story-card:nth-child(3) {
    border-top: 4px solid #b84942;
}

.stories-grid .story-card:nth-child(3) .author-avatar {
    background: linear-gradient(135deg, #b84942, #e74c3c);
}

.stories-grid .story-card:nth-child(4) {
    border-top: 4px solid #4a90a4;
}

.stories-grid .story-card:nth-child(4) .author-avatar {
    background: linear-gradient(135deg, #4a90a4, #3498db);
}

.stories-grid .story-card:nth-child(5) {
    border-top: 4px solid #9b59b6;
}

.stories-grid .story-card:nth-child(5) .author-avatar {
    background: linear-gradient(135deg, #9b59b6, #8e44ad);
}

.stories-grid .story-card:nth-child(6) {
    border-top: 4px solid #34495e;
}

.stories-grid .story-card:nth-child(6) .author-avatar {
    background: linear-gradient(135deg, #34495e, #2c3e50);
}

/* Animation for Story Cards */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.story-card {
    animation: fadeInUp 0.6s ease-out;
}

.stories-grid .story-card:nth-child(1) { animation-delay: 0.1s; }
.stories-grid .story-card:nth-child(2) { animation-delay: 0.2s; }
.stories-grid .story-card:nth-child(3) { animation-delay: 0.3s; }
.stories-grid .story-card:nth-child(4) { animation-delay: 0.4s; }
.stories-grid .story-card:nth-child(5) { animation-delay: 0.5s; }
.stories-grid .story-card:nth-child(6) { animation-delay: 0.6s; }

/* Responsive Design */
@media (max-width: 1024px) {
    .stories-grid {
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 25px;
    }
    
    .story-card {
        padding: 2rem;
    }
}

@media (max-width: 768px) {
    .page-hero {
        padding: 80px 0 60px;
    }
    
    .page-hero h1 {
        font-size: 2.5rem;
    }
    
    .page-hero p {
        font-size: 1.1rem;
    }
    
    .success-stories {
        padding: 60px 0;
    }
    
    .section-header h2 {
        font-size: 2.2rem;
    }
    
    .section-header p {
        font-size: 1.1rem;
    }
    
    .stories-grid {
        grid-template-columns: 1fr;
        gap: 20px;
        max-width: 500px;
    }
    
    .story-card {
        padding: 1.8rem;
    }
    
    .story-text {
        font-size: 1rem;
    }
    
    .author-avatar {
        width: 50px;
        height: 50px;
        font-size: 1rem;
    }
    
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
    .page-hero h1 {
        font-size: 2rem;
    }
    
    .page-hero p {
        font-size: 1rem;
    }
    
    .section-header h2 {
        font-size: 1.8rem;
    }
    
    .story-card {
        padding: 1.5rem;
    }
    
    .story-card::before {
        font-size: 4rem;
        top: 15px;
        right: 20px;
    }
    
    .story-author {
        flex-direction: column;
        text-align: center;
        gap: 0.8rem;
    }
    
    .author-info {
        text-align: center;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .stat-number {
        font-size: 2.2rem;
    }
}

/* Print Styles */
@media print {
    .page-hero {
        background: white !important;
        color: black !important;
        padding: 40px 0 !important;
    }
    
    .success-stories {
        padding: 40px 0 !important;
    }
    
    .story-card {
        box-shadow: none !important;
        border: 1px solid #ddd !important;
        page-break-inside: avoid;
    }
    
    .story-card::before {
        display: none;
    }
}

/* High Contrast Mode Support */
@media (prefers-contrast: high) {
    .story-card {
        border: 2px solid #000;
    }
    
    .story-text {
        color: #000;
    }
    
    .author-info h4 {
        color: #000;
    }
}

/* Reduced Motion Support */
@media (prefers-reduced-motion: reduce) {
    .story-card {
        animation: none;
        transition: none;
    }
    
    .story-card:hover {
        transform: none;
    }
    
    .stat-item {
        animation: none;
        transition: none;
    }
    
    .stat-item:hover {
        transform: none;
    }
}
</style>

<!-- Hero Banner -->
<section class="page-hero">
    <div class="container">
        <h1>Success Stories</h1>
        <p>Real stories from community members whose lives have been transformed by the George Kithi Foundation</p>
    </div>
</section>

<!-- Enhanced Impact Stats -->
<section class="impact-stats">
    <div class="container">
        <div class="stats-header">
            <h2>Our Impact in Numbers</h2>
            <p>Transforming lives and communities through dedicated programs and initiatives</p>
        </div>
        
        <div class="stats-grid">
            <div class="stat-item fade-in">
                <div class="stat-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <span class="stat-number">200%</span>
                <div class="stat-label">Income Increase for Beneficiaries</div>
                <div class="stat-description">Average income growth for program participants</div>
            </div>
            <div class="stat-item fade-in">
                <div class="stat-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <span class="stat-number">1000+</span>
                <div class="stat-label">School Dropouts Mapped</div>
                <div class="stat-description">Identified and tracked for intervention programs</div>
            </div>
            <div class="stat-item fade-in">
                <div class="stat-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <span class="stat-number">100+</span>
                <div class="stat-label">Families Supported</div>
                <div class="stat-description">Provided with essential resources and training</div>
            </div>
            <div class="stat-item fade-in">
                <div class="stat-icon">
                    <i class="fas fa-award"></i>
                </div>
                <span class="stat-number">50+</span>
                <div class="stat-label">Scholarships Planned</div>
                <div class="stat-description">Educational opportunities for deserving students</div>
            </div>
        </div>
        
        <div class="stats-footer">
            <p>...and we're just getting started! Join us in making an even greater impact.</p>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<section id="impact" class="success-stories">
    <div class="container">
        <div class="section-header">
            <h2>Our Community Impact</h2>
            <p>Transforming lives through empowerment, education, and sustainable development.</p>
        </div>

        <div class="stories-grid">
            <div class="story-card">
                <div class="story-text">
                    Thanks to the George Kithi Foundation's support, my income has increased by 200%. This transformation has enabled me to significantly improve my family's capacity for education and healthcare. I can now afford to send my children to school and provide better healthcare for my family.
                </div>
                <div class="story-author">
                    <div class="author-avatar">EO</div>
                    <div class="author-info">
                        <h4>Effiong Okon</h4>
                        <p>Program Beneficiary</p>
                    </div>
                </div>
            </div>

            <div class="story-card">
                <div class="story-text">
                    The foundation's commitment to mapping school dropouts in our community gives us hope. Finally, someone is taking concrete steps to ensure no child is left behind in their education journey.
                </div>
                <div class="story-author">
                    <div class="author-avatar">CM</div>
                    <div class="author-info">
                        <h4>Community Member</h4>
                        <p>Kilifi County</p>
                    </div>
                </div>
            </div>

            <div class="story-card">
                <div class="story-text">
                    Access to clean water has changed everything for our village. Our children are healthier, and we no longer have to walk kilometers every day just to fetch water. The George Kithi Foundation has given us our lives back.
                </div>
                <div class="story-author">
                    <div class="author-avatar">MK</div>
                    <div class="author-info">
                        <h4>Maria Kamba</h4>
                        <p>Village Representative</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Optional Dynamic Section -->
<?php 
// Check if database connection exists
if (isset($pdo) && $pdo instanceof PDO) : ?>
    <?php
    try {
        $stmt = $pdo->query("SELECT name, story, location, initials FROM impact_stories ORDER BY id DESC LIMIT 3");
        $stories = $stmt->fetchAll();
        if ($stories):
    ?>
        <section class="success-stories dynamic-stories">
            <div class="container">
                <div class="section-header">
                    <h2>More Stories From Our Community</h2>
                </div>
                <div class="stories-grid">
                    <?php foreach ($stories as $s): ?>
                        <div class="story-card">
                            <div class="story-text"><?php echo htmlspecialchars($s['story']); ?></div>
                            <div class="story-author">
                                <div class="author-avatar"><?php echo htmlspecialchars($s['initials']); ?></div>
                                <div class="author-info">
                                    <h4><?php echo htmlspecialchars($s['name']); ?></h4>
                                    <p><?php echo htmlspecialchars($s['location']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php
        endif;
    } catch (Exception $e) {
        error_log($e->getMessage());
    }
    ?>
<?php endif; ?>

<?php 
// Only include footer if this is a standalone page
if ($is_standalone) {
    include __DIR__ . '/includes/footer.php';
}
?>