<style>
:root {
    --education-color: #3182ce;
    --healthcare-color: #38a169;
    --community-color: #805ad5;
    --sustainable-color: #48bb78;
    --water-color: #0bc5ea;
    --karate-color: #ed8936;
}

/* Hero Section */
.programs-hero {
    position: relative;
    padding: 120px 0 80px;
    background-image: url("images/logo/george-foundation header.jpg");
    color: white;
    overflow: hidden;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 50%, rgba(255,255,255,0.1) 0%, transparent 50%);
    pointer-events: none;
}

.hero-content {
    position: relative;
    z-index: 1;
    text-align: center;
}

.hero-content h1 {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 1rem;
    text-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.hero-subtitle {
    font-size: 1.3rem;
    margin-bottom: 3rem;
    opacity: 0.95;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.hero-stats {
    display: flex;
    justify-content: center;
    gap: 3rem;
    flex-wrap: wrap;
    margin-top: 3rem;
}

.hero-stat {
    text-align: center;
    padding: 1.5rem;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    min-width: 150px;
    transition: transform 0.3s ease;
}

.hero-stat:hover {
    transform: translateY(-5px);
}

.hero-stat .stat-value {
    display: block;
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 0.5rem;
}

.hero-stat .stat-text {
    display: block;
    font-size: 0.9rem;
    opacity: 0.9;
}

/* Programs Detail Section */
.programs-detail {
    padding: 100px 0;
    background: linear-gradient(to bottom, #f7fafc 0%, #ffffff 100%);
}

.section-header {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 4rem;
}

.section-header h2 {
    font-size: 2.8rem;
    color: #1a365d;
    margin-bottom: 1rem;
    font-weight: 700;
}

.section-header p {
    font-size: 1.2rem;
    color: #4a5568;
    line-height: 1.8;
}

.programs-grid-detailed {
    display: flex;
    flex-direction: column;
    gap: 4rem;
    max-width: 1200px;
    margin: 0 auto;
}

/* Program Cards */
.program-detail-card {
    background: white;
    border-radius: 24px;
    padding: 3rem;
    box-shadow: 0 10px 40px rgba(0,0,0,0.08);
    border: 1px solid #e2e8f0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
}

.program-detail-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 6px;
    height: 100%;
    background: linear-gradient(to bottom, var(--card-color), var(--card-color-dark));
}

.program-detail-card.education {
    --card-color: var(--education-color);
    --card-color-dark: #2c5aa0;
}

.program-detail-card.healthcare {
    --card-color: var(--healthcare-color);
    --card-color-dark: #2f855a;
}

.program-detail-card.community {
    --card-color: var(--community-color);
    --card-color-dark: #6b46c1;
}

.program-detail-card.sustainable {
    --card-color: var(--sustainable-color);
    --card-color-dark: #38a169;
}

.program-detail-card.water {
    --card-color: var(--water-color);
    --card-color-dark: #0987a0;
}

.program-detail-card.karate {
    --card-color: var(--karate-color);
    --card-color-dark: #c05621;
}

.program-detail-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.12);
}

/* Program Header */
.program-header {
    display: flex;
    align-items: center;
    gap: 2rem;
    margin-bottom: 2.5rem;
    padding-bottom: 2rem;
    border-bottom: 2px solid #f7fafc;
}

.program-icon {
    width: 90px;
    height: 90px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.8rem;
    background: linear-gradient(135deg, var(--card-color), var(--card-color-dark));
    color: white;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    flex-shrink: 0;
}

.program-title-wrapper {
    flex: 1;
}

.program-title-wrapper h3 {
    font-size: 2.2rem;
    color: #1a365d;
    margin-bottom: 0.8rem;
    font-weight: 700;
}

.program-status {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1.2rem;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
}

.status-active {
    background: rgba(56, 161, 105, 0.1);
    color: #38a169;
}

.status-planning {
    background: rgba(237, 137, 54, 0.1);
    color: #ed8936;
}

/* Program Stats */
.program-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
    padding: 2.5rem;
    background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
    border-radius: 20px;
}

.program-stat {
    text-align: center;
    position: relative;
}

.program-stat .stat-icon {
    font-size: 2rem;
    color: var(--card-color);
    margin-bottom: 0.8rem;
}

.program-stat .stat-number {
    font-size: 2.8rem;
    font-weight: 800;
    display: block;
    color: var(--card-color);
    margin-bottom: 0.5rem;
}

.program-stat .stat-label {
    color: #4a5568;
    font-size: 0.95rem;
    font-weight: 500;
}

/* Program Description */
.program-description {
    color: #2d3748;
    line-height: 1.8;
}

.description-block {
    margin-bottom: 2.5rem;
}

.description-block:last-child {
    margin-bottom: 0;
}

.description-block h4 {
    color: #1a365d;
    margin-bottom: 1.2rem;
    font-size: 1.4rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 0.8rem;
}

.description-block h4 i {
    color: var(--card-color);
    font-size: 1.2rem;
}

.description-block p {
    margin-bottom: 1rem;
    font-size: 1.05rem;
    color: #4a5568;
}

.objectives-list {
    list-style: none;
    padding-left: 0;
}

.objectives-list li {
    padding: 0.8rem 0;
    padding-left: 2.5rem;
    position: relative;
    font-size: 1.05rem;
    color: #4a5568;
    border-bottom: 1px solid #f7fafc;
}

.objectives-list li:last-child {
    border-bottom: none;
}

.objectives-list li i {
    position: absolute;
    left: 0;
    color: var(--card-color);
    font-size: 1.1rem;
}

/* Progress Section */
.progress-section {
    margin: 1.5rem 0;
    padding: 1.5rem;
    background: #f7fafc;
    border-radius: 15px;
}

.progress-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.progress-label {
    font-weight: 600;
    color: #2d3748;
}

.progress-percentage {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--card-color);
}

.progress-bar {
    width: 100%;
    height: 12px;
    background: #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 0.8rem;
}

.progress-fill {
    height: 100%;
    border-radius: 10px;
    background: linear-gradient(90deg, var(--card-color), var(--card-color-dark));
    transition: width 1s ease;
}

.progress-note {
    font-size: 0.9rem;
    color: #718096;
    font-style: italic;
}

/* Impact Metrics */
.impact-metrics {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
}

.metric-card {
    text-align: center;
    padding: 2rem;
    background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
    border-radius: 15px;
    border: 2px solid #e2e8f0;
    transition: transform 0.3s ease;
}

.metric-card:hover {
    transform: translateY(-5px);
}

.metric-card .metric-icon {
    font-size: 2.5rem;
    color: var(--card-color);
    margin-bottom: 1rem;
}

.metric-card .metric-value {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--card-color);
    display: block;
    margin-bottom: 0.5rem;
}

.metric-card .metric-label {
    color: #4a5568;
    font-size: 0.95rem;
    font-weight: 500;
}

/* Achievements Grid */
.achievements-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
}

.achievement-card {
    padding: 1.5rem;
    background: white;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: all 0.3s ease;
}

.achievement-card:hover {
    border-color: var(--card-color);
    transform: translateX(5px);
}

.achievement-card .achievement-icon {
    font-size: 2rem;
    color: var(--card-color);
    flex-shrink: 0;
}

.achievement-card p {
    margin: 0;
    font-size: 0.95rem;
    color: #4a5568;
    font-weight: 500;
}

/* Success Cards */
.success-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
}

.success-card {
    padding: 2rem;
    background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
    border-radius: 15px;
    border-left: 4px solid var(--card-color);
    transition: all 0.3s ease;
}

.success-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.success-card .success-icon {
    font-size: 2.5rem;
    color: var(--card-color);
    margin-bottom: 1rem;
}

.success-card h5 {
    font-size: 1.2rem;
    color: #1a365d;
    margin-bottom: 0.8rem;
    font-weight: 700;
}

.success-card p {
    margin: 0;
    color: #4a5568;
    font-size: 0.95rem;
    line-height: 1.6;
}

/* CTA Section */
.program-cta {
    position: relative;
    background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
    color: white;
    padding: 100px 0;
    text-align: center;
    overflow: hidden;
}

.cta-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 70% 50%, rgba(255,255,255,0.1) 0%, transparent 60%);
    pointer-events: none;
}

.cta-content {
    position: relative;
    z-index: 1;
    max-width: 800px;
    margin: 0 auto;
}

.cta-content h2 {
    font-size: 3rem;
    margin-bottom: 1.5rem;
    font-weight: 800;
    text-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.cta-content p {
    font-size: 1.3rem;
    margin-bottom: 3rem;
    opacity: 0.95;
    line-height: 1.8;
}

.cta-buttons {
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-primary,
.cta-secondary {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    padding: 1.2rem 2.5rem;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.cta-primary {
    background: white;
    color: #27ae60;
}

.cta-primary:hover {
    background: #f7fafc;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}

.cta-secondary {
    background: rgba(255,255,255,0.2);
    color: white;
    border: 2px solid white;
    backdrop-filter: blur(10px);
}

.cta-secondary:hover {
    background: rgba(255,255,255,0.3);
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}

.cta-primary i,
.cta-secondary i {
    font-size: 1.3rem;
}

/* Animations */
@keyframes fade-in {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slide-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fade-in 1s ease;
}

.animate-slide-up {
    animation: slide-up 1s ease 0.3s backwards;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .hero-content h1 {
        font-size: 3rem;
    }
    
    .program-title-wrapper h3 {
        font-size: 1.8rem;
    }
}

@media (max-width: 768px) {
    .programs-hero {
        padding: 80px 0 60px;
    }
    
    .hero-content h1 {
        font-size: 2.2rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
    }
    
    .hero-stats {
        gap: 1.5rem;
    }
    
    .hero-stat {
        min-width: 120px;
        padding: 1rem;
    }
    
    .hero-stat .stat-value {
        font-size: 2rem;
    }
    
    .section-header h2 {
        font-size: 2rem;
    }
    
    .section-header p {
        font-size: 1rem;
    }
    
    .programs-grid-detailed {
        gap: 3rem;
    }
    
    .program-detail-card {
        padding: 2rem;
    }
    
    .program-header {
        flex-direction: column;
        text-align: center;
        gap: 1.5rem;
    }
    
    .program-icon {
        width: 70px;
        height: 70px;
        font-size: 2.2rem;
    }
    
    .program-title-wrapper h3 {
        font-size: 1.6rem;
    }
    
    .program-stats {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        padding: 1.5rem;
    }
    
    .program-stat .stat-number {
        font-size: 2.2rem;
    }
    
    .description-block h4 {
        font-size: 1.2rem;
    }
    
    .achievements-grid,
    .success-cards {
        grid-template-columns: 1fr;
    }
    
    .cta-content h2 {
        font-size: 2rem;
    }
    
    .cta-content p {
        font-size: 1.1rem;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: stretch;
    }
    
    .cta-primary,
    .cta-secondary {
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .hero-content h1 {
        font-size: 1.8rem;
    }
    
    .hero-subtitle {
        font-size: 1rem;
    }
    
    .hero-stats {
        flex-direction: column;
        align-items: stretch;
    }
    
    .program-detail-card {
        padding: 1.5rem;
    }
    
    .program-icon {
        width: 60px;
        height: 60px;
        font-size: 2rem;
    }
    
    .program-title-wrapper h3 {
        font-size: 1.4rem;
    }
    
    .cta-content h2 {
        font-size: 1.6rem;
    }
}

/* Print Styles */
@media print {
    .programs-hero,
    .program-cta {
        background: white !important;
        color: black !important;
    }
    
    .program-detail-card {
        page-break-inside: avoid;
        box-shadow: none;
        border: 1px solid #e2e8f0;
    }
    
    .cta-buttons {
        display: none;
    }
}
</style>

<section class="hero programs-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="animate-fade-in">Our Programs</h1>
            <p class="hero-subtitle animate-slide-up">Comprehensive initiatives designed to create lasting impact in Kilifi County communities</p>
            <div class="hero-stats">
                <div class="hero-stat">
                    <span class="stat-value">6</span>
                    <span class="stat-text">Active Programs</span>
                </div>
                <div class="hero-stat">
                    <span class="stat-value">3,500+</span>
                    <span class="stat-text">Lives Impacted</span>
                </div>
                <div class="hero-stat">
                    <span class="stat-value">40+</span>
                    <span class="stat-text">Communities Reached</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="programs-detail">
    <div class="container">
        <div class="section-header">
            <h2>Transforming Lives Through Targeted Programs</h2>
            <p>Each program is carefully designed to address specific challenges facing our communities in Kilifi County</p>
        </div>

        <div class="programs-grid-detailed">
            <!-- Educational Support Program -->
            <div class="program-detail-card education">
                <div class="program-header">
                    <div class="program-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="program-title-wrapper">
                        <h3>Educational Support</h3>
                        <span class="program-status status-planning">
                            <i class="fas fa-clock"></i> In Development
                        </span>
                    </div>
                </div>

                <div class="program-content">
                    <div class="program-stats">
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-users"></i></div>
                            <span class="stat-number">1,000+</span>
                            <span class="stat-label">Dropouts Mapped</span>
                        </div>
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-award"></i></div>
                            <span class="stat-number">50</span>
                            <span class="stat-label">Scholarships Planned</span>
                        </div>
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-school"></i></div>
                            <span class="stat-number">25</span>
                            <span class="stat-label">Schools Covered</span>
                        </div>
                    </div>

                    <div class="program-description">
                        <div class="description-block">
                            <h4><i class="fas fa-info-circle"></i> Program Overview</h4>
                            <p>We are currently conducting comprehensive mapping of all school dropouts across Kilifi County to identify children who have been forced to leave school due to financial constraints. This data will form the foundation of our scholarship program launching in 2025.</p>
                        </div>
                        
                        <div class="description-block">
                            <h4><i class="fas fa-bullseye"></i> Key Objectives</h4>
                            <ul class="objectives-list">
                                <li><i class="fas fa-check-circle"></i> Identify and document all school dropouts in Kilifi County</li>
                                <li><i class="fas fa-check-circle"></i> Provide full scholarships for 50 deserving students initially</li>
                                <li><i class="fas fa-check-circle"></i> Offer mentorship and career guidance programs</li>
                                <li><i class="fas fa-check-circle"></i> Supply educational materials and school uniforms</li>
                                <li><i class="fas fa-check-circle"></i> Establish after-school tutoring centers</li>
                            </ul>
                        </div>

                        <div class="description-block">
                            <h4><i class="fas fa-chart-line"></i> Current Progress</h4>
                            <div class="progress-section">
                                <div class="progress-info">
                                    <span class="progress-label">Dropout Mapping Progress</span>
                                    <span class="progress-percentage">75%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill education-fill" style="width: 75%"></div>
                                </div>
                                <p class="progress-note">On track for 2025 launch</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Healthcare Initiatives Program -->
            <div class="program-detail-card healthcare">
                <div class="program-header">
                    <div class="program-icon">
                        <i class="fas fa-hospital-user"></i>
                    </div>
                    <div class="program-title-wrapper">
                        <h3>Healthcare Initiatives</h3>
                        <span class="program-status status-active">
                            <i class="fas fa-heartbeat"></i> Active
                        </span>
                    </div>
                </div>

                <div class="program-content">
                    <div class="program-stats">
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-user-md"></i></div>
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Patients Served</span>
                        </div>
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-clinic-medical"></i></div>
                            <span class="stat-number">12</span>
                            <span class="stat-label">Medical Camps</span>
                        </div>
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-hospital"></i></div>
                            <span class="stat-number">8</span>
                            <span class="stat-label">Partner Clinics</span>
                        </div>
                    </div>

                    <div class="program-description">
                        <div class="description-block">
                            <h4><i class="fas fa-info-circle"></i> Program Overview</h4>
                            <p>Our healthcare initiative focuses on providing essential medical services to underserved communities in Kilifi County through medical camps, health education, and partnerships with local healthcare providers.</p>
                        </div>
                        
                        <div class="description-block">
                            <h4><i class="fas fa-stethoscope"></i> Services Provided</h4>
                            <ul class="objectives-list">
                                <li><i class="fas fa-check-circle"></i> Free medical check-ups and consultations</li>
                                <li><i class="fas fa-check-circle"></i> Basic medication and treatment</li>
                                <li><i class="fas fa-check-circle"></i> Maternal and child healthcare services</li>
                                <li><i class="fas fa-check-circle"></i> HIV/AIDS awareness and testing</li>
                                <li><i class="fas fa-check-circle"></i> Nutritional support programs</li>
                                <li><i class="fas fa-check-circle"></i> Health education workshops</li>
                            </ul>
                        </div>

                        <div class="description-block">
                            <h4><i class="fas fa-chart-pie"></i> Impact Metrics</h4>
                            <div class="impact-metrics">
                                <div class="metric-card">
                                    <div class="metric-icon"><i class="fas fa-thumbs-up"></i></div>
                                    <span class="metric-value">85%</span>
                                    <span class="metric-label">Treatment Success Rate</span>
                                </div>
                                <div class="metric-card">
                                    <div class="metric-icon"><i class="fas fa-book-medical"></i></div>
                                    <span class="metric-value">2,000+</span>
                                    <span class="metric-label">Health Education Recipients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Community Empowerment Program -->
            <div class="program-detail-card community">
                <div class="program-header">
                    <div class="program-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="program-title-wrapper">
                        <h3>Community Empowerment</h3>
                        <span class="program-status status-active">
                            <i class="fas fa-check"></i> Active
                        </span>
                    </div>
                </div>

                <div class="program-content">
                    <div class="program-stats">
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-hands-helping"></i></div>
                            <span class="stat-number">15</span>
                            <span class="stat-label">Communities Reached</span>
                        </div>
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-users"></i></div>
                            <span class="stat-number">800+</span>
                            <span class="stat-label">People Empowered</span>
                        </div>
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-briefcase"></i></div>
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Livelihoods Created</span>
                        </div>
                    </div>

                    <div class="program-description">
                        <div class="description-block">
                            <h4><i class="fas fa-info-circle"></i> Program Overview</h4>
                            <p>Our Community Empowerment program focuses on building resilient communities through skills training, income generation projects, and capacity building initiatives that enable sustainable livelihoods.</p>
                        </div>
                        
                        <div class="description-block">
                            <h4><i class="fas fa-tasks"></i> Key Activities</h4>
                            <ul class="objectives-list">
                                <li><i class="fas fa-check-circle"></i> Vocational skills training programs</li>
                                <li><i class="fas fa-check-circle"></i> Small business development support</li>
                                <li><i class="fas fa-check-circle"></i> Women's economic empowerment groups</li>
                                <li><i class="fas fa-check-circle"></i> Youth entrepreneurship initiatives</li>
                                <li><i class="fas fa-check-circle"></i> Agricultural productivity enhancement</li>
                                <li><i class="fas fa-check-circle"></i> Community leadership training</li>
                            </ul>
                        </div>

                        <div class="description-block">
                            <h4><i class="fas fa-trophy"></i> Recent Achievements</h4>
                            <div class="achievements-grid">
                                <div class="achievement-card">
                                    <div class="achievement-icon"><i class="fas fa-check-double"></i></div>
                                    <p>5 women's groups established with micro-credit access</p>
                                </div>
                                <div class="achievement-card">
                                    <div class="achievement-icon"><i class="fas fa-check-double"></i></div>
                                    <p>200+ youth trained in marketable skills</p>
                                </div>
                                <div class="achievement-card">
                                    <div class="achievement-icon"><i class="fas fa-check-double"></i></div>
                                    <p>30% increase in household incomes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sustainable Development Program -->
            <div class="program-detail-card sustainable">
                <div class="program-header">
                    <div class="program-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="program-title-wrapper">
                        <h3>Sustainable Development</h3>
                        <span class="program-status status-active">
                            <i class="fas fa-check"></i> Active
                        </span>
                    </div>
                </div>

                <div class="program-content">
                    <div class="program-stats">
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-tree"></i></div>
                            <span class="stat-number">5,000+</span>
                            <span class="stat-label">Trees Planted</span>
                        </div>
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-recycle"></i></div>
                            <span class="stat-number">10</span>
                            <span class="stat-label">Recycling Projects</span>
                        </div>
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-solar-panel"></i></div>
                            <span class="stat-number">20</span>
                            <span class="stat-label">Green Energy Installations</span>
                        </div>
                    </div>

                    <div class="program-description">
                        <div class="description-block">
                            <h4><i class="fas fa-info-circle"></i> Program Overview</h4>
                            <p>Our Sustainable Development program promotes environmental conservation, climate action, and sustainable resource management to ensure a healthy planet for future generations while improving current livelihoods.</p>
                        </div>
                        
                        <div class="description-block">
                            <h4><i class="fas fa-tasks"></i> Key Activities</h4>
                            <ul class="objectives-list">
                                <li><i class="fas fa-check-circle"></i> Tree planting and reforestation projects</li>
                                <li><i class="fas fa-check-circle"></i> Clean energy solutions promotion</li>
                                <li><i class="fas fa-check-circle"></i> Waste management and recycling programs</li>
                                <li><i class="fas fa-check-circle"></i> Climate change awareness campaigns</li>
                                <li><i class="fas fa-check-circle"></i> Sustainable agriculture practices</li>
                                <li><i class="fas fa-check-circle"></i> Water conservation initiatives</li>
                            </ul>
                        </div>

                        <div class="description-block">
                            <h4><i class="fas fa-chart-pie"></i> Environmental Impact</h4>
                            <div class="impact-metrics">
                                <div class="metric-card">
                                    <div class="metric-icon"><i class="fas fa-chart-line"></i></div>
                                    <span class="metric-value">40%</span>
                                    <span class="metric-label">Reduction in Carbon Footprint</span>
                                </div>
                                <div class="metric-card">
                                    <div class="metric-icon"><i class="fas fa-water"></i></div>
                                    <span class="metric-value">30%</span>
                                    <span class="metric-label">Water Conservation Improvement</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Clean Water Initiative -->
            <div class="program-detail-card water">
                <div class="program-header">
                    <div class="program-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <div class="program-title-wrapper">
                        <h3>Clean Water Initiative</h3>
                        <span class="program-status status-active">
                            <i class="fas fa-check"></i> Active
                        </span>
                    </div>
                </div>

                <div class="program-content">
                    <div class="program-stats">
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-water"></i></div>
                            <span class="stat-number">5</span>
                            <span class="stat-label">Water Points</span>
                        </div>
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-users"></i></div>
                            <span class="stat-number">1,200+</span>
                            <span class="stat-label">People Served</span>
                        </div>
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-map-marked-alt"></i></div>
                            <span class="stat-number">3</span>
                            <span class="stat-label">Communities</span>
                        </div>
                    </div>

                    <div class="program-description">
                        <div class="description-block">
                            <h4><i class="fas fa-info-circle"></i> Program Overview</h4>
                            <p>Access to clean water is a fundamental human right. Our Clean Water Initiative focuses on establishing sustainable water sources and improving water quality in rural communities across Kilifi County.</p>
                        </div>
                        
                        <div class="description-block">
                            <h4><i class="fas fa-tasks"></i> Key Activities</h4>
                            <ul class="objectives-list">
                                <li><i class="fas fa-check-circle"></i> Borehole drilling and rehabilitation</li>
                                <li><i class="fas fa-check-circle"></i> Water purification system installation</li>
                                <li><i class="fas fa-check-circle"></i> Community water management training</li>
                                <li><i class="fas fa-check-circle"></i> Hygiene and sanitation education</li>
                                <li><i class="fas fa-check-circle"></i> Rainwater harvesting projects</li>
                            </ul>
                        </div>

                        <div class="description-block">
                            <h4><i class="fas fa-trophy"></i> Recent Achievements</h4>
                            <div class="achievements-grid">
                                <div class="achievement-card">
                                    <div class="achievement-icon"><i class="fas fa-check-double"></i></div>
                                    <p>3 new boreholes completed in 2024</p>
                                </div>
                                <div class="achievement-card">
                                    <div class="achievement-icon"><i class="fas fa-check-double"></i></div>
                                    <p>Water-related diseases reduced by 60%</p>
                                </div>
                                <div class="achievement-card">
                                    <div class="achievement-icon"><i class="fas fa-check-double"></i></div>
                                    <p>Women's water collection time reduced by 3 hours daily</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Youth Sports Development Program -->
            <div class="program-detail-card karate">
                <div class="program-header">
                    <div class="program-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <div class="program-title-wrapper">
                        <h3>Youth Sports Development</h3>
                        <span class="program-status status-active">
                            <i class="fas fa-running"></i> Active
                        </span>
                    </div>
                </div>

                <div class="program-content">
                    <div class="program-stats">
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-child"></i></div>
                            <span class="stat-number">200+</span>
                            <span class="stat-label">Youth Engaged</span>
                        </div>
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-medal"></i></div>
                            <span class="stat-number">1</span>
                            <span class="stat-label">National Championship</span>
                        </div>
                        <div class="program-stat">
                            <div class="stat-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                            <span class="stat-number">15</span>
                            <span class="stat-label">Coaches Trained</span>
                        </div>
                    </div>

                    <div class="program-description">
                        <div class="description-block">
                            <h4><i class="fas fa-info-circle"></i> Program Overview</h4>
                            <p>Our Youth Sports Development program uses sports as a tool for youth empowerment, character building, and talent development. We recently facilitated the National Japan Karate Association (JKA) Championship in Nairobi.</p>
                        </div>
                        
                        <div class="description-block">
                            <h4><i class="fas fa-list-ul"></i> Program Components</h4>
                            <ul class="objectives-list">
                                <li><i class="fas fa-check-circle"></i> Karate and martial arts training</li>
                                <li><i class="fas fa-check-circle"></i> Sports equipment provision</li>
                                <li><i class="fas fa-check-circle"></i> Coach development programs</li>
                                <li><i class="fas fa-check-circle"></i> Inter-school sports competitions</li>
                                <li><i class="fas fa-check-circle"></i> Life skills integration through sports</li>
                            </ul>
                        </div>

                        <div class="description-block">
                            <h4><i class="fas fa-star"></i> Success Stories</h4>
                            <div class="success-cards">
                                <div class="success-card">
                                    <div class="success-icon"><i class="fas fa-trophy"></i></div>
                                    <h5>National Recognition</h5>
                                    <p>Our youth team won 3 gold medals at the JKA Championship</p>
                                </div>
                                <div class="success-card">
                                    <div class="success-icon"><i class="fas fa-graduation-cap"></i></div>
                                    <h5>Academic Excellence</h5>
                                    <p>90% of participating students showed improved academic performance</p>
                                </div>
                                <div class="success-card">
                                    <div class="success-icon"><i class="fas fa-hands-helping"></i></div>
                                    <h5>Community Impact</h5>
                                    <p>Reduced youth idleness and crime rates in participating areas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="program-cta">
    <div class="cta-overlay"></div>
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Make a Difference?</h2>
            <p>Join us in transforming lives through our community programs. Your support can help us reach more people and create lasting change.</p>
            <div class="cta-buttons">
                <a href="donate.php" class="cta-primary">
                    <i class="fas fa-donate"></i>
                    <span>Donate to Programs</span>
                </a>
                <a href="contact.php" class="cta-secondary">
                    <i class="fas fa-hands-helping"></i>
                    <span>Volunteer With Us</span>
                </a>
            </div>
        </div>
    </div>
</section>