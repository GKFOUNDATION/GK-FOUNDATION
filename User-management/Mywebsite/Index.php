<?php
require_once 'config.php';
require_once 'functions.php';

$countdown = getChampionshipCountdown();
$events = getChampionshipEvents();
$news = getWKFNews();
$medals = getMedalTable();

$page_title = "World Karate Federation - Official Website";
include 'header.php';
?>

<!-- Countdown Section -->
<section class="countdown-section">
    <div class="container">
        <h1>2025 Islamic Solidarity Games</h1>
        <h2>RYADH SAUDI ARABIA</h2>
        
        <div class="countdown-timer">
            <div class="timer-box">
                <span class="number"><?php echo $countdown['days']; ?></span>
                <span class="label">Days</span>
            </div>
            <div class="timer-box">
                <span class="number"><?php echo $countdown['hours']; ?></span>
                <span class="label">Hours</span>
            </div>
            <div class="timer-box">
                <span class="number"><?php echo $countdown['minutes']; ?></span>
                <span class="label">Minutes</span>
            </div>
            <div class="timer-box">
                <span class="number"><?php echo $countdown['seconds']; ?></span>
                <span class="label">Seconds</span>
            </div>
        </div>
        
        <p class="countdown-status"><?php echo $countdown['status']; ?> Championship</p>
    </div>
</section>

<!-- Main Navigation -->
<nav class="wkf-main-nav">
    <div class="container">
        <ul>
            <li><a href="events.php">Events</a></li>
            <li><a href="rankings.php">Ranking</a></li>
            <li><a href="news.php">News Center</a></li>
            <li><a href="brands.php">WKF Approved Brands</a></li>
            <li><a href="guardian.php">Guardian Girls Karate</a></li>
            <li><a href="olympics.php">Olympics</a></li>
        </ul>
    </div>
</nav>

<!-- Championship Types -->
<section class="championship-types">
    <div class="container">
        <h2>WKF Competition Categories</h2>
        <div class="types-grid">
            <div class="type-card">
                <h3>KARATE 1</h3>
                <p>Premier League Series</p>
                <span class="event-count">12 Events</span>
            </div>
            <div class="type-card">
                <h3>WORLD CHAMPIONSHIPS</h3>
                <p>Senior & Junior Categories</p>
                <span class="event-count">5 Events</span>
            </div>
            <div class="type-card">
                <h3>CONTINENTAL CHAMPIONSHIPS</h3>
                <p>Regional Qualifications</p>
                <span class="event-count">6 Confederations</span>
            </div>
            <div class="type-card">
                <h3>MULTISPORT EVENTS</h3>
                <p>Olympic & Regional Games</p>
                <span class="event-count">4 Major Games</span>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events -->
<section class="upcoming-events">
    <div class="container">
        <h2>2025 Championship Calendar</h2>
        <div class="events-grid">
            <?php foreach($events as $event): ?>
            <div class="event-card">
                <div class="event-type <?php echo strtolower($event['type']); ?>"><?php echo $event['type']; ?></div>
                <h3><?php echo $event['title']; ?></h3>
                <p class="event-location">📍 <?php echo $event['location']; ?></p>
                <p class="event-date">📅 <?php echo $event['date']; ?></p>
                <a href="#" class="event-link">View Details</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Latest News -->
<section class="latest-news">
    <div class="container">
        <div class="section-header">
            <h2>NEWS CENTER</h2>
            <a href="news.php" class="read-all-news">READ ALL NEWS</a>
        </div>
        
        <div class="news-grid">
            <?php foreach($news as $item): ?>
            <article class="news-card">
                <div class="news-category"><?php echo $item['category']; ?></div>
                <h3><?php echo $item['title']; ?></h3>
                <p><?php echo $item['summary']; ?></p>
                <div class="news-meta">
                    <span class="news-date"><?php echo date('M j, Y', strtotime($item['date'])); ?></span>
                    <a href="#" class="read-more">Read Full Story →</a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Medal Table -->
<section class="medal-table-section">
    <div class="container">
        <h2>Current Medal Standings</h2>
        <div class="table-container">
            <table class="medal-table">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Country</th>
                        <th>🥇</th>
                        <th>🥈</th>
                        <th>🥉</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $rank = 1; foreach($medals as $country): ?>
                    <tr>
                        <td><?php echo $rank++; ?></td>
                        <td class="country-name"><?php echo $country['country']; ?></td>
                        <td class="gold"><?php echo $country['gold']; ?></td>
                        <td class="silver"><?php echo $country['silver']; ?></td>
                        <td class="bronze"><?php echo $country['bronze']; ?></td>
                        <td class="total"><?php echo $country['total']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>