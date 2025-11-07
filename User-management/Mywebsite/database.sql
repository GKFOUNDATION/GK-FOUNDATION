CREATE DATABASE karate_championships;
USE karate_championships;

CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    publish_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    image_url VARCHAR(500),
    category VARCHAR(100)
);

CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    event_date DATE NOT NULL,
    description TEXT,
    type ENUM('KARATE1', 'WORLD_CHAMPIONSHIP', 'CONTINENTAL', 'MULTISPORT')
);

CREATE TABLE athletes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    country VARCHAR(100),
    category ENUM('Kata', 'Kumite'),
    ranking_points INT DEFAULT 0
);

-- Sample data
INSERT INTO news (title, content, category) VALUES 
('Egypt Shines on Final Day of 2025 UFAK Karate Championships in Abuja', 'Egyptian karate athletes delivered outstanding performances on the final day...', 'Championships'),
('New WKF Approved Brands Announced for 2025 Season', 'The World Karate Federation has announced the list of approved equipment brands...', 'Official');

INSERT INTO events (title, location, event_date, type) VALUES 
('UFAK Senior Championships', 'Abuja, Nigeria', '2025-07-25', 'CONTINENTAL'),
('Islamic Solidarity Games', 'Ryadh, Saudi Arabia', '2025-08-15', 'MULTISPORT');