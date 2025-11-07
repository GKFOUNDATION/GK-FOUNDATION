<style>
.about-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.about-header {
    text-align: center;
    margin-bottom: 50px;
}

.about-header h1 {
    font-size: 2.8rem;
    color: #2c3e50;
    margin-bottom: 15px;
}

.about-header .subtitle {
    font-size: 1.3rem;
    color: #7f8c8d;
    max-width: 800px;
    margin: 0 auto;
}

.founder-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    padding: 50px;
    border-radius: 15px;
    margin-bottom: 50px;
    border-left: 5px solid #2c5aa0;
}

.founder-content {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 40px;
    align-items: center;
}

.founder-image {
    text-align: center;
}

.founder-placeholder {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: linear-gradient(135deg, #2c5aa0, #3498db);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 4rem;
    margin: 0 auto;
    box-shadow: 0 10px 30px rgba(44, 90, 160, 0.3);
}

.founder-info h2 {
    color: #2c5aa0;
    margin-bottom: 20px;
    font-size: 2.2rem;
}

.founder-info h3 {
    color: #e74c3c;
    margin-bottom: 15px;
    font-size: 1.3rem;
}

.founder-info p {
    line-height: 1.8;
    color: #555;
    margin-bottom: 15px;
    font-size: 1.1rem;
}

.about-mission {
    margin: 50px 0;
}

.mission-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.mission-card {
    background: white;
    padding: 40px 30px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    border-top: 4px solid #2c5aa0;
    transition: transform 0.3s ease;
}

.mission-card:hover {
    transform: translateY(-5px);
}

.mission-icon {
    font-size: 3rem;
    margin-bottom: 20px;
    display: block;
}

.mission-card h3 {
    color: #2c3e50;
    margin-bottom: 15px;
    font-size: 1.4rem;
}

.mission-card p {
    color: #7f8c8d;
    line-height: 1.6;
}

.core-values {
    margin: 60px 0;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
    margin-top: 40px;
}

.value-item {
    background: white;
    padding: 30px;
    border-radius: 10px;
    border-left: 4px solid #2c5aa0;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}

.value-item:hover {
    transform: translateY(-3px);
}

.value-item h4 {
    color: #2c5aa0;
    margin-bottom: 15px;
    font-size: 1.3rem;
}

.value-item p {
    color: #666;
    line-height: 1.6;
}

.team-section {
    background: #f8f9fa;
    padding: 60px 40px;
    border-radius: 15px;
    margin-top: 60px;
}

.team-section h2 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 40px;
    font-size: 2.2rem;
}

@media (max-width: 768px) {
    .founder-content {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .founder-placeholder {
        width: 150px;
        height: 150px;
        font-size: 3rem;
    }
    
    .about-header h1 {
        font-size: 2.2rem;
    }
    
    .mission-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<div class="about-content">
    <div class="about-header">
        <h1>About George Kithi Foundation</h1>
        <p class="subtitle">Empowering Communities, Transforming Lives in Kilifi County</p>
    </div>

    <!-- Founder Section -->
    <div class="founder-section">
        <div class="founder-content">
            <div class="founder-image">
                <div class="founder-placeholder">
                    <i class="fas fa-user-tie"></i>
                </div>
            </div>
            <div class="founder-info">
                <h2>George Kithi</h2>
                <h3>Founder & Visionary Leader</h3>
                
                <p>George Kithi is a dedicated community leader and visionary social entrepreneur with a profound commitment to transforming lives in Kilifi County. Born and raised in the very communities he now serves, George possesses an intimate understanding of the challenges and opportunities facing the people of coastal Kenya.</p>
                
                <p>With over 15 years of experience in community development and social entrepreneurship, George has dedicated his life to creating sustainable solutions that address the root causes of poverty, inequality, and limited access to essential services. His journey began as a youth volunteer, where he witnessed firsthand the transformative power of education and community empowerment.</p>
                
                <p>George's leadership philosophy is built on the principle of "Ubuntu" - the African concept of shared humanity. He believes that true development occurs when communities are empowered to become architects of their own destiny. His approach combines local wisdom with innovative solutions, ensuring that interventions are culturally appropriate and sustainable.</p>
                
                <p>Under George's visionary leadership, the foundation has grown from a small community initiative to a respected organization making significant impacts in education, healthcare, clean water access, and economic empowerment across Kilifi County.</p>
                
                <p><strong>"We don't just provide solutions; we build capacity. We don't just give resources; we create opportunities. True transformation happens when communities discover their own power to create change."</strong> - George Kithi</p>
            </div>
        </div>
    </div>

    <!-- Mission & Vision -->
    <div class="about-mission">
        <div class="mission-grid">
            <div class="mission-card">
                <span class="mission-icon">🎯</span>
                <h3>Our Mission</h3>
                <p>To empower communities in Kilifi County through comprehensive development programs that provide access to quality education, healthcare, clean water, and sustainable economic opportunities, fostering self-reliance and lasting positive change.</p>
            </div>
            
            <div class="mission-card">
                <span class="mission-icon">🌍</span>
                <h3>Our Vision</h3>
                <p>We envision a transformed Kilifi County where every individual has equal opportunities to thrive, communities are self-sufficient, and future generations inherit a legacy of sustainable development and shared prosperity.</p>
            </div>
            
            <div class="mission-card">
                <span class="mission-icon">🤝</span>
                <h3>Our Approach</h3>
                <p>We work hand-in-hand with communities, listening to their needs and co-creating solutions that are culturally appropriate, environmentally sustainable, and economically viable for long-term impact.</p>
            </div>
        </div>
    </div>

    <!-- Core Values -->
    <div class="core-values">
        <h2 style="text-align: center; color: #2c3e50; margin-bottom: 40px;">Our Core Values</h2>
        <div class="values-grid">
            <div class="value-item">
                <h4>Integrity</h4>
                <p>We maintain the highest standards of honesty, transparency, and accountability in all our operations and relationships with stakeholders.</p>
            </div>
            <div class="value-item">
                <h4>Compassion</h4>
                <p>We serve with empathy, dignity, and respect, recognizing the inherent worth of every individual and community we work with.</p>
            </div>
            <div class="value-item">
                <h4>Innovation</h4>
                <p>We embrace creative solutions and adapt to changing circumstances to maximize our impact and effectiveness.</p>
            </div>
            <div class="value-item">
                <h4>Sustainability</h4>
                <p>We design programs that create lasting change, ensuring communities can maintain and build upon our interventions long after our direct involvement.</p>
            </div>
            <div class="value-item">
                <h4>Collaboration</h4>
                <p>We believe in the power of partnerships and work closely with communities, government agencies, and other organizations to achieve shared goals.</p>
            </div>
            <div class="value-item">
                <h4>Excellence</h4>
                <p>We strive for the highest quality in all our programs, continuously learning and improving to better serve our communities.</p>
            </div>
        </div>
    </div>

    <!-- Our Story -->
    <div class="team-section">
        <h2>Our Story</h2>
        <div style="max-width: 800px; margin: 0 auto;">
            <p style="font-size: 1.1rem; line-height: 1.8; color: #555; text-align: center; margin-bottom: 25px;">
                The George Kithi Foundation was born from George's personal experiences growing up in Kilifi County. Witnessing the challenges faced by his community - from limited educational opportunities to inadequate healthcare and clean water access - ignited a passion for creating meaningful change.
            </p>
            <p style="font-size: 1.1rem; line-height: 1.8; color: #555; text-align: center; margin-bottom: 25px;">
                What started as small community initiatives in 2015 has grown into a comprehensive development organization. Today, we work across multiple sectors, touching thousands of lives through our education support programs, healthcare initiatives, clean water projects, and community empowerment activities.
            </p>
            <p style="font-size: 1.1rem; line-height: 1.8; color: #555; text-align: center;">
                Our journey continues as we expand our reach and deepen our impact, always guided by our commitment to empowering communities and transforming lives, one family at a time.
            </p>
        </div>
    </div>
</div>
