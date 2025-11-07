<style>
/* === News Header Section === */
.news-hero {
    background-image: url("images/logo/george-foundation header.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 300px;
    position: relative;
    padding: 80px 20px;
}

.news-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4); /* Dark overlay for better text readability */
    z-index: 1;
}

.news-hero .content {
    position: relative;
    z-index: 2;
}

.news-hero h2 {
    font-size: 2.8rem;
    font-weight: 800;
    color: #fff;
    margin-bottom: 15px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.news-hero p {
    font-size: 1.15rem;
    color: #eaffea;
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.6;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
}

/* === News Cards === */
.program-item {
    background: #fff;
    border-radius: 15px;
    padding: 30px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    position: relative;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.program-item:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.program-item .icon {
    font-size: 2.5rem;
    color: #0b8b36;
    margin-bottom: 15px;
}

.program-item h4 {
    font-weight: 700;
    color: #222;
    margin-bottom: 10px;
    font-size: 1.1rem;
    line-height: 1.4;
}

.program-item h4 a {
    color: inherit;
    text-decoration: none;
    transition: color 0.3s ease;
}

.program-item h4 a:hover {
    color: #0b8b36;
}

.program-item .date {
    font-size: 0.9rem;
    color: #888;
    margin-bottom: 10px;
    font-weight: 500;
}

.program-item p {
    font-size: 0.95rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
}

.learn-more-btn {
    color: #0b8b36;
    font-weight: 600;
    text-decoration: none;
    transition: 0.3s;
    display: inline-block;
    margin-top: auto;
}

.learn-more-btn:hover {
    color: #046d2b;
    transform: translateX(5px);
}

/* Responsive Design */
@media (max-width: 768px) {
    .news-hero {
        min-height: 250px;
        padding: 60px 20px;
    }
    
    .news-hero h2 {
        font-size: 2.2rem;
    }
    
    .news-hero p {
        font-size: 1rem;
    }
    
    .program-item {
        padding: 20px;
    }
}

@media (max-width: 480px) {
    .news-hero h2 {
        font-size: 1.8rem;
    }
    
    .news-hero p {
        font-size: 0.9rem;
    }
}
</style>

<!-- News Section -->
<section id="news">
  <div class="program">
    <div class="container-fluid px-0">

        <!-- Hero-style Green Header -->
        <div class="news-hero text-center text-white d-flex flex-column align-items-center justify-content-center position-relative">
            <div class="content">
                <h2>News & Updates</h2>
                <p>Stay informed about our latest achievements, community projects, and impact stories</p>
            </div>
        </div>

        <!-- News Grid -->
        <div class="container mt-5">
            <div class="row gy-4">
                <?php
                // Try to fetch news from DB, else fallback
                $rows = [];
                try {
                    $stmt = $pdo->query("SELECT id, title, summary, icon, DATE_FORMAT(published_at, '%M %e, %Y') AS pub_date FROM news ORDER BY published_at DESC LIMIT 12");
                    $rows = $stmt->fetchAll();
                } catch (Exception $e) {
                    $rows = [];
                }

                if (!empty($rows)) :
                    foreach ($rows as $r) : ?>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="program-item">
                                <div class="icon">
                                    <?php echo !empty($r['icon']) ? esc($r['icon']) : '📰'; ?>
                                </div>
                                <h4><a href="news-single.php?id=<?php echo (int)$r['id']; ?>"><?php echo esc($r['title']); ?></a></h4>
                                <p class="date"><?php echo esc($r['pub_date']); ?></p>
                                <p><?php echo esc($r['summary']); ?></p>
                                <a href="news-single.php?id=<?php echo (int)$r['id']; ?>" class="learn-more-btn">Read More →</a>
                            </div>
                        </div>
                    <?php endforeach;
                else:
                    // Fallback static items
                    $fallback = [
                        [
                            'date' => 'October 25, 2025',
                            'icon' => '🏆',
                            'title' => 'George Kithi Foundation Wins Humanitarian Group Award at East African Super Woman Awards 2025',
                            'summary' => 'The George Kithi Foundation received the Humanitarian Group of the Year 2025 at the prestigious East African Super Woman Awards.'
                        ],
                        [
                            'date' => 'October 18, 2025',
                            'icon' => '🎓',
                            'title' => 'Bright Needy Students in Ganze Get Lifeline Through Our Bursary Program',
                            'summary' => 'More than 100 students in Ganze Constituency have received bursaries from the George Kithi Foundation.'
                        ],
                        [
                            'date' => 'October 10, 2025',
                            'icon' => '🌍',
                            'title' => "George Kithi Foundation Wins Africa's 2025 Humanitarian Award of the Year",
                            'summary' => 'More than 100 students in Ganze Constituency have benefited from the George Kithi Foundation\'s bursary program.'
                        ],
                        [
                            'date' => 'October 5, 2025',
                            'icon' => '💰',
                            'title' => 'HISA ZIPO CBO Gets Ksh 500,000 Support as It Transitions Into a SACCO',
                            'summary' => 'The Foundation has funded grassroots empowerment in Kilifi County with a Ksh 500,000 donation to HISA ZIPO CBO.'
                        ],
                        [
                            'date' => 'September 30, 2025',
                            'icon' => '🤝',
                            'title' => 'Jila Community, George Kithi Foundation Partner to Secure Students\' Future',
                            'summary' => 'The George Kithi Foundation and the Jila community joined hands to ensure students\' access to education through collaborative bursary support.'
                        ],
                    ];

                    foreach ($fallback as $item) : ?>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="program-item">
                                <div class="icon"><?php echo $item['icon']; ?></div>
                                <h4><a href="#"><?php echo $item['title']; ?></a></h4>
                                <p class="date"><?php echo $item['date']; ?></p>
                                <p><?php echo $item['summary']; ?></p>
                                <a href="#" class="learn-more-btn">Read More →</a>
                            </div>
                        </div>
                    <?php endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
  </div>
</section>