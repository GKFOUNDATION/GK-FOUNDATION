-- ===================================
-- George Kithi Foundation Database Schema
-- ===================================
-- This SQL file creates all necessary tables for the website
-- Run this in your MySQL/MariaDB database

-- Create database (if it doesn't exist)
CREATE DATABASE IF NOT EXISTS georgekithi_foundation CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE georgekithi_foundation;

-- ===================================
-- CONTACT SUBMISSIONS TABLE
-- ===================================
CREATE TABLE IF NOT EXISTS contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50),
    inquiry_type VARCHAR(100),
    subject VARCHAR(255),
    message TEXT NOT NULL,
    submitted_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    status ENUM('new', 'read', 'responded', 'archived') DEFAULT 'new',
    ip_address VARCHAR(45),
    user_agent TEXT,
    INDEX idx_submitted_at(submitted_at),
    INDEX idx_status(status),
    INDEX idx_email(email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- DONATIONS TABLE
-- ===================================
CREATE TABLE IF NOT EXISTS donations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    donor_name VARCHAR(255) NOT NULL,
    donor_email VARCHAR(255),
    donor_phone VARCHAR(50),
    amount DECIMAL(10, 2) NOT NULL,
    currency VARCHAR(10) DEFAULT 'KES',
    payment_method ENUM('mpesa', 'bank_transfer', 'cash', 'other') NOT NULL,
    transaction_reference VARCHAR(255),
    program_id INT,
    donation_type ENUM('one-time', 'monthly', 'annual') DEFAULT 'one-time',
    status ENUM('pending', 'completed', 'failed', 'refunded') DEFAULT 'pending',
    message TEXT,
    receipt_sent BOOLEAN DEFAULT FALSE,
    donated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_donated_at(donated_at),
    INDEX idx_status(status),
    INDEX idx_donor_email(donor_email),
    INDEX idx_program_id(program_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- PROGRAMS TABLE
-- ===================================
CREATE TABLE IF NOT EXISTS programs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    description TEXT,
    full_description LONGTEXT,
    icon VARCHAR(100),
    color VARCHAR(50),
    status ENUM('active', 'planning', 'completed', 'suspended') DEFAULT 'active',
    target_amount DECIMAL(10, 2),
    current_amount DECIMAL(10, 2) DEFAULT 0,
    beneficiaries_target INT,
    beneficiaries_current INT DEFAULT 0,
    start_date DATE,
    end_date DATE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_slug(slug),
    INDEX idx_status(status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- NEWS/UPDATES TABLE
-- ===================================
CREATE TABLE IF NOT EXISTS news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    excerpt TEXT,
    content LONGTEXT NOT NULL,
    featured_image VARCHAR(255),
    author VARCHAR(255),
    category VARCHAR(100),
    tags VARCHAR(255),
    status ENUM('draft', 'published', 'archived') DEFAULT 'draft',
    views INT DEFAULT 0,
    published_at DATETIME,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_slug(slug),
    INDEX idx_status(status),
    INDEX idx_published_at(published_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- SUCCESS STORIES/TESTIMONIALS TABLE
-- ===================================
CREATE TABLE IF NOT EXISTS success_stories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    role VARCHAR(255),
    story TEXT NOT NULL,
    avatar VARCHAR(255),
    program_id INT,
    status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
    featured BOOLEAN DEFAULT FALSE,
    display_order INT DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_status(status),
    INDEX idx_featured(featured),
    INDEX idx_program_id(program_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- VOLUNTEERS TABLE
-- ===================================
CREATE TABLE IF NOT EXISTS volunteers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50),
    address TEXT,
    skills TEXT,
    availability VARCHAR(255),
    program_interest TEXT,
    experience TEXT,
    motivation TEXT,
    status ENUM('pending', 'approved', 'active', 'inactive') DEFAULT 'pending',
    applied_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    approved_at DATETIME,
    INDEX idx_email(email),
    INDEX idx_status(status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- PARTNERS TABLE
-- ===================================
CREATE TABLE IF NOT EXISTS partners (
    id INT AUTO_INCREMENT PRIMARY KEY,
    organization_name VARCHAR(255) NOT NULL,
    contact_person VARCHAR(255),
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50),
    website VARCHAR(255),
    partnership_type ENUM('corporate', 'ngo', 'government', 'individual', 'other') NOT NULL,
    areas_of_interest TEXT,
    proposed_contribution TEXT,
    message TEXT,
    logo VARCHAR(255),
    status ENUM('pending', 'active', 'inactive') DEFAULT 'pending',
    applied_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    approved_at DATETIME,
    INDEX idx_email(email),
    INDEX idx_status(status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- BENEFICIARIES TABLE
-- ===================================
CREATE TABLE IF NOT EXISTS beneficiaries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    id_number VARCHAR(50),
    phone VARCHAR(50),
    email VARCHAR(255),
    address TEXT,
    program_id INT,
    enrollment_date DATE,
    status ENUM('active', 'completed', 'suspended') DEFAULT 'active',
    notes TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_program_id(program_id),
    INDEX idx_status(status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- ADMIN USERS TABLE
-- ===================================
CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    full_name VARCHAR(255),
    role ENUM('super_admin', 'admin', 'editor', 'viewer') DEFAULT 'viewer',
    status ENUM('active', 'inactive', 'suspended') DEFAULT 'active',
    last_login DATETIME,
    failed_login_attempts INT DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_username(username),
    INDEX idx_email(email),
    INDEX idx_status(status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- SETTINGS TABLE
-- ===================================
CREATE TABLE IF NOT EXISTS settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    setting_key VARCHAR(255) UNIQUE NOT NULL,
    setting_value TEXT,
    setting_type VARCHAR(50) DEFAULT 'text',
    description TEXT,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_setting_key(setting_key)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- NEWSLETTER SUBSCRIBERS TABLE
-- ===================================
CREATE TABLE IF NOT EXISTS newsletter_subscribers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    name VARCHAR(255),
    status ENUM('subscribed', 'unsubscribed', 'bounced') DEFAULT 'subscribed',
    subscribed_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    unsubscribed_at DATETIME,
    verification_token VARCHAR(255),
    verified BOOLEAN DEFAULT FALSE,
    INDEX idx_email(email),
    INDEX idx_status(status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- INSERT SAMPLE DATA
-- ===================================

-- Insert programs
INSERT INTO programs (name, slug, description, icon, color, status) VALUES
('Education & Scholarships', 'education', 'Mapping school dropouts and providing scholarships', 'fa-graduation-cap', '#3182ce', 'planning'),
('Healthcare Access', 'healthcare', 'Providing healthcare services and medical camps', 'fa-hospital-user', '#38a169', 'active'),
('Clean Water Initiative', 'water', 'Water infrastructure and access projects', 'fa-tint', '#0bc5ea', 'active'),
('Youth Sports Development', 'sports', 'Sports programs for youth empowerment', 'fa-dumbbell', '#ed8936', 'active');

-- Insert sample success stories
INSERT INTO success_stories (name, role, story, program_id, status, featured) VALUES
('Effiong Okon', 'Program Beneficiary', 'Thanks to the George Kithi Foundation support, my income has increased by 200%. This transformation has enabled me to significantly improve my family capacity for education and healthcare.', 1, 'approved', TRUE),
('Community Member', 'Kilifi County', 'The foundation commitment to mapping school dropouts in our community gives us hope. Finally, someone is taking concrete steps to ensure no child is left behind.', 1, 'approved', TRUE),
('Maria Kamba', 'Village Representative', 'Access to clean water has changed everything for our village. Our children are healthier, and we no longer have to walk kilometers every day just to fetch water.', 3, 'approved', TRUE);

-- Insert default admin user (password: Admin@123 - CHANGE THIS IMMEDIATELY!)
-- Note: Use password_hash() in PHP to generate secure password
INSERT INTO admin_users (username, email, password_hash, full_name, role, status) VALUES
('admin', 'admin@georgekithifoundation.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Administrator', 'super_admin', 'active');

-- Insert default settings
INSERT INTO settings (setting_key, setting_value, setting_type, description) VALUES
('site_name', 'George Kithi Foundation', 'text', 'Website name'),
('site_email', 'info@georgekithifoundation.org', 'email', 'Contact email'),
('site_phone', '+254 XXX XXX XXX', 'text', 'Contact phone'),
('mpesa_paybill', 'XXXXXX', 'text', 'M-Pesa paybill number'),
('maintenance_mode', '0', 'boolean', 'Site maintenance mode'),
('google_analytics_id', '', 'text', 'Google Analytics tracking ID');

-- ===================================
-- CREATE VIEWS (Optional)
-- ===================================

-- View for donation statistics
CREATE OR REPLACE VIEW donation_statistics AS
SELECT 
    COUNT(*) as total_donations,
    SUM(amount) as total_amount,
    AVG(amount) as average_amount,
    COUNT(DISTINCT donor_email) as unique_donors,
    program_id,
    DATE_FORMAT(donated_at, '%Y-%m') as month
FROM donations
WHERE status = 'completed'
GROUP BY program_id, month;

-- View for program statistics
CREATE OR REPLACE VIEW program_statistics AS
SELECT 
    p.id,
    p.name,
    p.status,
    COUNT(DISTINCT b.id) as total_beneficiaries,
    COUNT(DISTINCT d.id) as total_donations,
    COALESCE(SUM(d.amount), 0) as total_raised
FROM programs p
LEFT JOIN beneficiaries b ON p.id = b.program_id
LEFT JOIN donations d ON p.id = d.program_id AND d.status = 'completed'
GROUP BY p.id, p.name, p.status;

-- ===================================
-- NOTES FOR IMPLEMENTATION
-- ===================================
/*
1. After running this script, remember to:
   - Change the default admin password immediately
   - Update the settings table with your actual contact information
   - Add your M-Pesa paybill number
   - Configure database connection in includes/config.php

2. Security recommendations:
   - Use prepared statements for all queries
   - Implement CSRF protection on forms
   - Use password_hash() and password_verify() for passwords
   - Enable SSL/HTTPS on your website
   - Regularly backup your database

3. For production use:
   - Review and adjust table indexes based on query patterns
   - Set up automated backups
   - Monitor database performance
   - Implement proper error logging
*/