<section class="donate-hero">
    <div class="container">
        <div class="hero-content">
            <h1>Transform Lives in Kilifi County</h1>
            <p class="hero-subtitle">Your donation provides education, healthcare, clean water, and hope to communities in need</p>
            <div class="trust-indicators">
                <div class="trust-item">
                    <i class="fas fa-shield-alt"></i>
                    <span>Secure Donation</span>
                </div>
                <div class="trust-item">
                    <i class="fas fa-receipt"></i>
                    <span>Tax Deductible</span>
                </div>
                <div class="trust-item">
                    <i class="fas fa-lock"></i>
                    <span>SSL Encrypted</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="donation-impact">
    <div class="container">
        <div class="impact-grid">
            <div class="impact-card">
                <div class="impact-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Education</h3>
                <p>KSh 1,000 provides school supplies for 5 children</p>
            </div>
            <div class="impact-card">
                <div class="impact-icon">
                    <i class="fas fa-stethoscope"></i>
                </div>
                <h3>Healthcare</h3>
                <p>KSh 2,500 supports one medical camp consultation</p>
            </div>
            <div class="impact-card">
                <div class="impact-icon">
                    <i class="fas fa-tint"></i>
                </div>
                <h3>Clean Water</h3>
                <p>KSh 5,000 provides clean water for a family for 6 months</p>
            </div>
            <div class="impact-card">
                <div class="impact-icon">
                    <i class="fas fa-dumbbell"></i>
                </div>
                <h3>Youth Sports</h3>
                <p>KSh 10,000 funds sports equipment for 20 youth</p>
            </div>
        </div>
    </div>
</section>

<section class="donation-options">
    <div class="container">
        <div class="donation-grid">
            <div class="donation-card">
                <div class="card-header">
                    <h2>Quick Donation</h2>
                    <p>Choose an amount to make an immediate impact</p>
                </div>
                <div class="amount-options">
                    <button class="amount-option" data-amount="500">
                        <span class="amount">KSh 500</span>
                        <span class="impact">Feeds 2 children for a week</span>
                    </button>
                    <button class="amount-option" data-amount="1000">
                        <span class="amount">KSh 1,000</span>
                        <span class="impact">School supplies for 5 children</span>
                    </button>
                    <button class="amount-option" data-amount="2500">
                        <span class="amount">KSh 2,500</span>
                        <span class="impact">Medical consultation</span>
                    </button>
                    <button class="amount-option" data-amount="5000">
                        <span class="amount">KSh 5,000</span>
                        <span class="impact">Clean water for 6 months</span>
                    </button>
                    <button class="amount-option" data-amount="10000">
                        <span class="amount">KSh 10,000</span>
                        <span class="impact">Sports equipment for 20 youth</span>
                    </button>
                </div>
                <div class="custom-amount">
                    <label for="custom-amount-input">Or enter custom amount:</label>
                    <div class="input-group">
                        <span class="currency">KSh</span>
                        <input type="number" id="custom-amount-input" placeholder="Enter amount" min="100">
                    </div>
                </div>
            </div>

            <div class="donation-card">
                <div class="card-header">
                    <h2>Donation Type</h2>
                    <p>Choose how you want to support our mission</p>
                </div>
                <div class="donation-type-options">
                    <div class="type-option active" data-type="one-time">
                        <div class="type-header">
                            <i class="fas fa-hand-holding-heart"></i>
                            <h3>One-Time Gift</h3>
                            <span class="badge">Most Popular</span>
                        </div>
                        <p>Make a single donation to support our immediate needs and ongoing programs</p>
                    </div>
                    <div class="type-option" data-type="monthly">
                        <div class="type-header">
                            <i class="fas fa-calendar-check"></i>
                            <h3>Monthly Support</h3>
                            <span class="badge">Most Impactful</span>
                        </div>
                        <p>Provide sustained support with automatic monthly donations</p>
                        <div class="monthly-benefits">
                            <div class="benefit">
                                <i class="fas fa-check"></i>
                                <span>Helps us plan long-term projects</span>
                            </div>
                            <div class="benefit">
                                <i class="fas fa-check"></i>
                                <span>Reduces administrative costs</span>
                            </div>
                            <div class="benefit">
                                <i class="fas fa-check"></i>
                                <span>Creates sustainable impact</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="donation-card">
                <div class="card-header">
                    <h2>Where to Direct Your Gift</h2>
                    <p>Choose which program to support (optional)</p>
                </div>
                <div class="program-options">
                    <select id="program-select">
                        <option value="where-needed" data-desc="Your donation will be used where it's most urgently needed across all our programs.">Where Most Needed</option>
                        <option value="education" data-desc="Support scholarships, school meal programs, and educational infrastructure in Kilifi.">Education & Scholarships Program</option>
                        <option value="healthcare" data-desc="Fund medical camps, essential medicine, and community health worker training.">Healthcare Access Initiative</option>
                        <option value="water" data-desc="Help drill boreholes, install water purification systems, and build sanitation facilities.">Clean Water Initiative</option>
                        <option value="sports" data-desc="Provide sporting equipment, coaching, and mentorship to empower youth through sports.">Youth Sports Development</option>
                        <option value="emergency" data-desc="A flexible fund for rapid response to local crises, drought, or immediate relief needs.">Emergency Relief Fund</option>
                    </select>
                    <div class="program-description">
                        <p id="program-desc">Your donation will be used where it's most urgently needed across all our programs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="payment-section">
    <div class="container">
        <div class="payment-container">
            <div class="payment-form-container">
                <h2>Complete Your Donation</h2>
                <form id="donation-form" class="donation-form">
                    <div class="form-section">
                        <h3>Personal Information</h3>
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="full-name">Full Name *</label>
                                <input type="text" id="full-name" name="full_name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <select id="country" name="country">
                                    <option value="kenya">Kenya</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3>Payment Method</h3>
                        <div class="payment-methods">
                            <div class="payment-method active" data-method="mpesa">
                                <div class="method-header">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>M-Pesa</span>
                                </div>
                                <p>Pay instantly via M-Pesa</p>
                            </div>
                            <div class="payment-method" data-method="card">
                                <div class="method-header">
                                    <i class="fas fa-credit-card"></i>
                                    <span>Credit/Debit Card</span>
                                </div>
                                <p>Pay with Visa, Mastercard, or American Express</p>
                            </div>
                            <div class="payment-method" data-method="bank">
                                <div class="method-header">
                                    <i class="fas fa-university"></i>
                                    <span>Bank Transfer</span>
                                </div>
                                <p>Transfer directly to our bank account</p>
                            </div>
                        </div>

                        <div id="mpesa-instructions" class="payment-instructions active">
                            <h4>M-Pesa Donation Instructions:</h4>
                            <div class="instructions-steps">
                                <div class="step">
                                    <span class="step-number">1</span>
                                    <span>Go to M-Pesa on your phone</span>
                                </div>
                                <div class="step">
                                    <span class="step-number">2</span>
                                    <span>Select "Lipa Na M-Pesa"</span>
                                </div>
                                <div class="step">
                                    <span class="step-number">3</span>
                                    <span>Enter Paybill: <strong>123456</strong></span>
                                </div>
                                <div class="step">
                                    <span class="step-number">4</span>
                                    <span>Enter Account: <strong>DONATION</strong></span>
                                </div>
                                <div class="step">
                                    <span class="step-number">5</span>
                                    <span>Enter amount: <strong id="mpesa-amount">KSh 0</strong></span>
                                </div>
                            </div>
                        </div>

                        <div id="card-payment" class="payment-instructions">
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="card-number">Card Number</label>
                                    <input type="text" id="card-number" placeholder="1234 5678 9012 3456">
                                </div>
                                <div class="form-group">
                                    <label for="card-name">Name on Card</label>
                                    <input type="text" id="card-name">
                                </div>
                                <div class="form-group-half">
                                    <div class="form-group">
                                        <label for="expiry-date">Expiry Date</label>
                                        <input type="text" id="expiry-date" placeholder="MM/YY">
                                    </div>
                                    <div class="form-group">
                                        <label for="cvv">CVV</label>
                                        <input type="text" id="cvv" placeholder="123">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="bank-transfer" class="payment-instructions">
                            <h4>Bank Transfer Details:</h4>
                            <div class="bank-details">
                                <div class="bank-detail">
                                    <span class="label">Bank Name:</span>
                                    <span class="value">Equity Bank Kenya</span>
                                </div>
                                <div class="bank-detail">
                                    <span class="label">Account Name:</span>
                                    <span class="value">George Kithi Foundation</span>
                                </div>
                                <div class="bank-detail">
                                    <span class="label">Account Number:</span>
                                    <span class="value">0123456789</span>
                                </div>
                                <div class="bank-detail">
                                    <span class="label">Branch:</span>
                                    <span class="value">Kilifi Main Branch</span>
                                </div>
                                <div class="bank-detail">
                                    <span class="label">Swift Code:</span>
                                    <span class="value">EQBLKENA</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="donation-summary">
                        <h3>Donation Summary</h3>
                        <div class="summary-items">
                            <div class="summary-item">
                                <span>Amount:</span>
                                <span id="summary-amount">KSh 0</span>
                            </div>
                            <div class="summary-item">
                                <span>Frequency:</span>
                                <span id="summary-frequency">One-time</span>
                            </div>
                            <div class="summary-item">
                                <span>Program:</span>
                                <span id="summary-program">Where Most Needed</span>
                            </div>
                            <div class="summary-item total">
                                <span>Total:</span>
                                <span id="summary-total">KSh 0</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="submit-donation-btn">
                            <i class="fas fa-lock"></i>
                            Complete Donation
                        </button>
                        <p class="security-note">
                            <i class="fas fa-shield-alt"></i>
                            Your donation is secure and encrypted
                        </p>
                    </div>
                </form>
            </div>

            <div class="donation-sidebar">
                <div class="sidebar-card">
                    <h3>Why Donate to George Kithi Foundation?</h3>
                    <div class="reasons-list">
                        <div class="reason">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>93%</strong> of donations go directly to programs</span>
                        </div>
                        <div class="reason">
                            <i class="fas fa-check-circle"></i>
                            <span>Registered nonprofit with full transparency</span>
                        </div>
                        <div class="reason">
                            <i class="fas fa-check-circle"></i>
                            <span>Local impact in Kilifi County communities</span>
                        </div>
                        <div class="reason">
                            <i class="fas fa-check-circle"></i>
                            <span>Regular impact reports sent to donors</span>
                        </div>
                    </div>
                </div>

                <div class="sidebar-card">
                    <h3>Donor Testimonials</h3>
                    <div class="testimonial">
                        <p>"I've been donating monthly for a year and love receiving updates about the children's progress. It's rewarding to see my contribution making a real difference."</p>
                        <div class="testimonial-author">
                            <strong>Sarah M.</strong>
                            <span>Monthly Donor</span>
                        </div>
                    </div>
                </div>

                <div class="sidebar-card">
                    <h3>Need Help?</h3>
                    <div class="help-options">
                        <div class="help-option">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Call Us</strong>
                                <span>+254 712 345 678</span>
                            </div>
                        </div>
                        <div class="help-option">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email Us</strong>
                                <span>donate@georgekithifoundation.org</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="donation-faq">
    <div class="container">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-grid">
            <div class="faq-item">
                <h3>Is my donation tax-deductible?</h3>
                <p>Yes, the George Kithi Foundation is a registered nonprofit organization, and all donations are tax-deductible. You will receive a receipt for your records.</p>
            </div>
            <div class="faq-item">
                <h3>How will my donation be used?</h3>
                <p>93% of your donation goes directly to program services. Only 7% covers administrative and fundraising costs, ensuring maximum impact.</p>
            </div>
            <div class="faq-item">
                <h3>Can I get updates on how my donation is used?</h3>
                <p>Yes! We send regular impact reports to our donors showing the specific programs and communities benefiting from their support.</p>
            </div>
            <div class="faq-item">
                <h3>What payment methods do you accept?</h3>
                <p>We accept M-Pesa, credit/debit cards, and bank transfers. All payments are processed securely through encrypted channels.</p>
            </div>
        </div>
    </div>
</section>

<style>
/* Hero Section */
.donate-hero {
     background-image: url("images/logo/george-foundation header.jpg");
    color: white;
    padding: 100px 0 80px;
    text-align: center;
}

.donate-hero h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.hero-subtitle {
    font-size: 1.3rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.trust-indicators {
    display: flex;
    justify-content: center;
    gap: 2rem;
    flex-wrap: wrap;
}

.trust-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.9rem;
    opacity: 0.9;
}

/* Impact Section */
.donation-impact {
    padding: 80px 0;
    background: #f8f9fa;
}

.impact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.impact-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.impact-card:hover {
    transform: translateY(-5px);
}

.impact-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #2c5aa0, #1a7f5f);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    color: white;
    font-size: 2rem;
}

.impact-card h3 {
    color: #2c3e50;
    margin-bottom: 1rem;
}

.impact-card p {
    color: #7f8c8d;
    line-height: 1.5;
}

/* Donation Options */
.donation-options {
    padding: 80px 0;
}

.donation-grid {
    display: grid;
    gap: 2rem;
}

.donation-card {
    background: white;
    padding: 2.5rem;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.card-header h2 {
    color: #2c3e50;
    margin-bottom: 0.5rem;
}

.card-header p {
    color: #7f8c8d;
    margin-bottom: 2rem;
}

.amount-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    margin-bottom: 2rem;
}

.amount-option {
    padding: 1.5rem;
    border: 2px solid #e1e8ed;
    border-radius: 10px;
    background: white;
    cursor: pointer;
    transition: all 0.3s ease;
    text-align: left;
}

.amount-option:hover {
    border-color: #2c5aa0;
}

.amount-option.active {
    border-color: #2c5aa0;
    background: #f0f7ff;
}

.amount {
    display: block;
    font-size: 1.3rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 0.5rem;
}

.impact {
    display: block;
    font-size: 0.9rem;
    color: #7f8c8d;
}

.custom-amount {
    margin-top: 1rem;
}

.input-group {
    position: relative;
    max-width: 300px;
}

.input-group .currency {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: #7f8c8d;
    font-weight: 600;
}

.input-group input {
    width: 100%;
    padding: 1rem 1rem 1rem 3rem;
    border: 2px solid #e1e8ed;
    border-radius: 10px;
    font-size: 1rem;
}

.donation-type-options {
    display: grid;
    gap: 1rem;
}

.type-option {
    padding: 1.5rem;
    border: 2px solid #e1e8ed;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.type-option.active {
    border-color: #2c5aa0;
    background: #f0f7ff;
}

.type-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.type-header i {
    font-size: 1.5rem;
    color: #2c5aa0;
}

.type-header h3 {
    margin: 0;
    color: #2c3e50;
}

.badge {
    background: #e74c3c;
    color: white;
    padding: 0.3rem 0.8rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
}

.monthly-benefits {
    margin-top: 1rem;
}

.benefit {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
    color: #27ae60;
}

/* Payment Section */
.payment-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.payment-container {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 3rem;
}

.payment-form-container {
    background: white;
    padding: 3rem;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.payment-methods {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1rem;
    margin-bottom: 2rem;
}

.payment-method {
    padding: 1.5rem;
    border: 2px solid #e1e8ed;
    border-radius: 10px;
    cursor: pointer;
    text-align: center;
    transition: all 0.3s ease;
}

.payment-method.active {
    border-color: #2c5aa0;
    background: #f0f7ff;
}

.method-header {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.payment-instructions {
    display: none;
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 10px;
    margin-top: 1rem;
}

.payment-instructions.active {
    display: block;
}

.instructions-steps {
    display: grid;
    gap: 1rem;
}

.step {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.step-number {
    width: 30px;
    height: 30px;
    background: #2c5aa0;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
}

.bank-details {
    display: grid;
    gap: 1rem;
}

.bank-detail {
    display: flex;
    justify-content: space-between;
    padding: 0.5rem 0;
    border-bottom: 1px solid #e1e8ed;
}

.bank-detail:last-child {
    border-bottom: none;
}

.donation-summary {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 10px;
    margin: 2rem 0;
}

.summary-items {
    display: grid;
    gap: 0.5rem;
}

.summary-item {
    display: flex;
    justify-content: space-between;
}

.summary-item.total {
    border-top: 2px solid #e1e8ed;
    padding-top: 0.5rem;
    margin-top: 0.5rem;
    font-weight: 700;
    font-size: 1.1rem;
    color: #2c5aa0;
}

.submit-donation-btn {
    width: 100%;
    padding: 1.2rem;
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.submit-donation-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(231, 76, 60, 0.4);
}

.security-note {
    text-align: center;
    margin-top: 1rem;
    color: #7f8c8d;
}

/* Sidebar */
.donation-sidebar {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.sidebar-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.reasons-list {
    display: grid;
    gap: 1rem;
}

.reason {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.reason i {
    color: #27ae60;
}

.testimonial {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 10px;
    margin-top: 1rem;
}

.testimonial-author {
    margin-top: 1rem;
    font-style: italic;
}

.help-options {
    display: grid;
    gap: 1rem;
}

.help-option {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 10px;
}

/* FAQ Section */
.donation-faq {
    padding: 80px 0;
}

.faq-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.faq-item {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.faq-item h3 {
    color: #2c3e50;
    margin-bottom: 1rem;
}

/* Form Styles */
.form-section {
    margin-bottom: 2rem;
}

.form-section h3 {
    color: #2c3e50;
    margin-bottom: 1rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid #f8f9fa;
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.form-group-half {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    margin-bottom: 0.5rem;
    font-weight: 500;
    color: #2c3e50;
}

.form-group input,
.form-group select {
    padding: 1rem;
    border: 2px solid #e1e8ed;
    border-radius: 10px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: #2c5aa0;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .payment-container {
        grid-template-columns: 1fr;
    }
    
    .donation-sidebar {
        order: -1;
    }
}

@media (max-width: 768px) {
    .donate-hero h1 {
        font-size: 2rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
    }
    
    .trust-indicators {
        flex-direction: column;
        gap: 1rem;
    }
    
    .form-grid {
        grid-template-columns: 1fr;
    }
    
    .amount-options {
        grid-template-columns: 1fr;
    }
    
    .payment-methods {
        grid-template-columns: 1fr;
    }
    
    .donation-card {
        padding: 1.5rem;
    }
    
    .payment-form-container {
        padding: 1.5rem;
    }
}

@media (max-width: 480px) {
    .container {
        width: 95%;
    }
    
    .impact-grid {
        grid-template-columns: 1fr;
    }
    
    .faq-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize donation state
    let selectedAmount = 0;
    let donationType = 'one-time';
    let paymentMethod = 'mpesa';
    let selectedProgram = 'where-needed';
    let selectedProgramText = 'Where Most Needed';

    // Elements
    const amountOptions = document.querySelectorAll('.amount-option');
    const customAmountInput = document.getElementById('custom-amount-input');
    const typeOptions = document.querySelectorAll('.type-option');
    const paymentMethods = document.querySelectorAll('.payment-method');
    const paymentInstructions = document.querySelectorAll('.payment-instructions');
    const programSelect = document.getElementById('program-select');
    const programDesc = document.getElementById('program-desc');
    const summaryAmount = document.getElementById('summary-amount');
    const summaryFrequency = document.getElementById('summary-frequency');
    const summaryProgram = document.getElementById('summary-program');
    const summaryTotal = document.getElementById('summary-total');
    const mpesaAmountDisplay = document.getElementById('mpesa-amount');
    const donationForm = document.getElementById('donation-form');

    // Helper function to format currency
    const formatCurrency = (amount) => `KSh ${amount.toLocaleString('en-KE')}`;

    // Update Summary function
    const updateSummary = () => {
        const amount = selectedAmount || (parseInt(customAmountInput.value) || 0);
        
        // Update summary section
        summaryAmount.textContent = formatCurrency(amount);
        summaryTotal.textContent = formatCurrency(amount);
        summaryFrequency.textContent = donationType === 'monthly' ? 'Monthly' : 'One-time';
        summaryProgram.textContent = selectedProgramText;

        // Update M-Pesa instructions amount
        if (mpesaAmountDisplay) {
            mpesaAmountDisplay.textContent = formatCurrency(amount);
        }
    };

    // --- Event Listeners ---

    // 1. Amount selection
    amountOptions.forEach(option => {
        option.addEventListener('click', function() {
            // Remove active class from all options and clear custom input
            amountOptions.forEach(opt => opt.classList.remove('active'));
            customAmountInput.value = '';
            
            // Set active and update amount
            this.classList.add('active');
            selectedAmount = parseInt(this.dataset.amount);
            updateSummary();
        });
    });
    
    customAmountInput.addEventListener('input', function() {
        // Remove active class from all options
        amountOptions.forEach(opt => opt.classList.remove('active'));
        
        // Set selected amount from custom input
        selectedAmount = parseInt(this.value) || 0;
        updateSummary();
    });
    
    // Set default selected amount (e.g., KSh 1000) for better UX if none is selected
    if (amountOptions.length > 0) {
        amountOptions[1].click(); // Set KSh 1000 as initial selection
    }

    // 2. Donation type selection
    typeOptions.forEach(option => {
        option.addEventListener('click', function() {
            typeOptions.forEach(opt => opt.classList.remove('active'));
            this.classList.add('active');
            donationType = this.dataset.type;
            updateSummary();
        });
    });

    // 3. Payment method selection
    paymentMethods.forEach(method => {
        method.addEventListener('click', function() {
            paymentMethods.forEach(m => m.classList.remove('active'));
            this.classList.add('active');
            paymentMethod = this.dataset.method;
            
            // Show relevant payment instructions
            paymentInstructions.forEach(inst => inst.classList.remove('active'));
            const instructionElement = document.getElementById(`${paymentMethod}-instructions`) || document.getElementById(`${paymentMethod}-payment`);
            if (instructionElement) {
                instructionElement.classList.add('active');
            }
            updateSummary();
        });
    });
    
    // Set default payment method instructions visibility
    const defaultInstructions = document.getElementById('mpesa-instructions');
    if (defaultInstructions) {
        defaultInstructions.classList.add('active');
    }

    // 4. Program selection
    programSelect.addEventListener('change', function() {
        selectedProgram = this.value;
        const selectedOption = this.options[this.selectedIndex];
        selectedProgramText = selectedOption.textContent;
        const programDescription = selectedOption.dataset.desc;
        
        // Update program description text
        if (programDesc && programDescription) {
            programDesc.textContent = programDescription;
        }

        updateSummary();
    });

    // 5. Form submission (Placeholder for actual submission logic)
    donationForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const amount = selectedAmount || (parseInt(customAmountInput.value) || 0);
        
        if (amount < 100) {
            alert('Please enter a donation amount of at least KSh 100.');
            return;
        }

        const formData = new FormData(this);
        const data = Object.fromEntries(formData.entries());
        data.amount = amount;
        data.frequency = donationType;
        data.program = selectedProgram;
        data.payment_method = paymentMethod;

        // Placeholder for AJAX submission
        console.log('Donation Data:', data);
        
        // In a real application, you would send this data to a server-side script
        // that handles payment processing (e.g., M-Pesa C2B, Card gateway).
        alert(`Thank you for your ${formatCurrency(amount)} ${donationType} donation! Processing via ${paymentMethod}...`);
        
        // Clear form after simulated submission (optional)
        // donationForm.reset();
        // selectedAmount = 0;
        // updateSummary();
    });
    
    // Initial summary update
    updateSummary(); 
});
</script>