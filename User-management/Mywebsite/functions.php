<?php
// Include config
require_once 'config.php';

// Countdown timer for championships
function getChampionshipCountdown() {
    $target_date = strtotime('2025-08-15 00:00:00');
    $current_date = time();
    $difference = $target_date - $current_date;
    
    if ($difference < 0) {
        return [
            'days' => 0, 
            'hours' => 0, 
            'minutes' => 0, 
            'seconds' => 0,
            'status' => 'Completed'
        ];
    }
    
    return [
        'days' => floor($difference / (60 * 60 * 24)),
        'hours' => floor(($difference % (60 * 60 * 24)) / (60 * 60)),
        'minutes' => floor(($difference % (60 * 60)) / 60),
        'seconds' => floor($difference % 60),
        'status' => 'Upcoming'
    ];
}

// Get championship events
function getChampionshipEvents() {
    return [
        [
            'title' => 'UFAK Senior Championships',
            'location' => 'Abuja, Nigeria',
            'date' => 'July 25-27, 2025',
            'type' => 'Continental'
        ],
        [
            'title' => 'Islamic Solidarity Games',
            'location' => 'Ryadh, Saudi Arabia', 
            'date' => 'August 15-20, 2025',
            'type' => 'Multisport'
        ],
        [
            'title' => 'World Karate Championships',
            'location' => 'Istanbul, Turkey',
            'date' => 'November 10-15, 2025',
            'type' => 'World'
        ]
    ];
}

// Get latest news (in a real site, this would come from database)
function getWKFNews() {
    return [
        [
            'title' => 'Egypt Shines on Final Day of 2025 UFAK Karate Championships',
            'summary' => 'Egyptian karate athletes delivered outstanding performances on the final day of competition in Abuja...',
            'date' => '2025-03-15',
            'category' => 'Championships'
        ],
        [
            'title' => 'New WKF Approved Brands for 2025 Season',
            'summary' => 'The World Karate Federation has announced the official list of approved equipment brands...',
            'date' => '2025-03-10', 
            'category' => 'Official'
        ],
        [
            'title' => 'Karate Qualification System for Olympics 2028',
            'summary' => 'The International Olympic Committee has approved the qualification pathway for karate...',
            'date' => '2025-03-05',
            'category' => 'Olympics'
        ]
    ];
}

// Get medal table (sample data)
function getMedalTable() {
    return [
        ['country' => 'Japan', 'gold' => 12, 'silver' => 8, 'bronze' => 5, 'total' => 25],
        ['country' => 'Egypt', 'gold' => 8, 'silver' => 10, 'bronze' => 7, 'total' => 25],
        ['country' => 'Turkey', 'gold' => 7, 'silver' => 6, 'bronze' => 9, 'total' => 22],
        ['country' => 'Iran', 'gold' => 6, 'silver' => 7, 'bronze' => 8, 'total' => 21],
        ['country' => 'Spain', 'gold' => 5, 'silver' => 6, 'bronze' => 4, 'total' => 15]
    ];
}
?>