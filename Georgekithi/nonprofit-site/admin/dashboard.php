<?php
require_once '../includes/auth.php';
require_once '../includes/config.php';
require_once '../includes/db.php';

// Check if user is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

$page_title = "Admin Dashboard";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            color: #2d3748;
        }

        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: #1a365d;
            color: white;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
        }

        .sidebar-header {
            padding: 2rem 1.5rem;
            border-bottom: 1px solid #2d3748;
        }

        .sidebar-header h2 {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .sidebar-nav {
            padding: 1.5rem 0;
        }

        .nav-item {
            padding: 0.8rem 1.5rem;
            color: #cbd5e0;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.8rem;
            transition: all 0.3s ease;
        }

        .nav-item:hover, .nav-item.active {
            background: #2d3748;
            color: white;
            border-left: 4px solid #3182ce;
        }

        .nav-item i {
            width: 20px;
            text-align: center;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 2rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e2e8f0;
        }

        .header h1 {
            font-size: 2rem;
            color: #1a365d;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logout-btn {
            background: #e53e3e;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.9rem;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-left: 4px solid #3182ce;
        }

        .stat-card h3 {
            font-size: 0.9rem;
            color: #718096;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            font-weight: 600;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #2d3748;
        }

        .stat-card.donations { border-left-color: #38a169; }
        .stat-card.volunteers { border-left-color: #ed8936; }
        .stat-card.programs { border-left-color: #0bc5ea; }

        /* Recent Activity */
        .dashboard-section {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .section-header h2 {
            font-size: 1.3rem;
            color: #1a365d;
        }

        .view-all {
            color: #3182ce;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .activity-list, .donation-list {
            list-style: none;
        }

        .activity-item, .donation-item {
            padding: 1rem 0;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .activity-item:last-child, .donation-item:last-child {
            border-bottom: none;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #edf2f7;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #3182ce;
        }

        .activity-content {
            flex: 1;
        }

        .activity-title {
            font-weight: 600;
            color: #2d3748;
        }

        .activity-time {
            font-size: 0.8rem;
            color: #718096;
        }

        .donation-amount {
            font-weight: 700;
            color: #38a169;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .admin-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h2><i class="fas fa-cogs"></i> Admin Panel</h2>
            </div>
            <nav class="sidebar-nav">
                <a href="dashboard.php" class="nav-item active">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <a href="donations.php" class="nav-item">
                    <i class="fas fa-donate"></i> Donations
                </a>
                <a href="programs.php" class="nav-item">
                    <i class="fas fa-project-diagram"></i> Programs
                </a>
                <a href="volunteers.php" class="nav-item">
                    <i class="fas fa-users"></i> Volunteers
                </a>
                <a href="messages.php" class="nav-item">
                    <i class="fas fa-envelope"></i> Messages
                </a>
                <a href="settings.php" class="nav-item">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <a href="logout.php" class="nav-item">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Dashboard Overview</h1>
                <div class="user-info">
                    <span>Welcome, Admin</span>
                    <a href="logout.php" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <h3>Total Donations</h3>
                    <div class="stat-number">KES 254,800</div>
                    <small>+12% from last month</small>
                </div>
                <div class="stat-card donations">
                    <h3>Recent Donations</h3>
                    <div class="stat-number">24</div>
                    <small>This month</small>
                </div>
                <div class="stat-card volunteers">
                    <h3>Volunteers</h3>
                    <div class="stat-number">45</div>
                    <small>Active members</small>
                </div>
                <div class="stat-card programs">
                    <h3>Programs</h3>
                    <div class="stat-number">4</div>
                    <small>Active programs</small>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="dashboard-section">
                <div class="section-header">
                    <h2>Recent Activity</h2>
                    <a href="#" class="view-all">View All</a>
                </div>
                <ul class="activity-list">
                    <li class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-donate"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">New donation received</div>
                            <div class="activity-time">John Doe donated KES 5,000 - 2 hours ago</div>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">New volunteer registered</div>
                            <div class="activity-time">Jane Smith joined as volunteer - 5 hours ago</div>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">New contact message</div>
                            <div class="activity-time">Message from Robert Johnson - 1 day ago</div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Recent Donations -->
            <div class="dashboard-section">
                <div class="section-header">
                    <h2>Recent Donations</h2>
                    <a href="donations.php" class="view-all">View All</a>
                </div>
                <ul class="donation-list">
                    <li class="donation-item">
                        <div class="activity-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Sarah Wilson</div>
                            <div class="activity-time">KES 10,000 - Education Program</div>
                        </div>
                        <div class="donation-amount">KES 10,000</div>
                    </li>
                    <li class="donation-item">
                        <div class="activity-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Mike Johnson</div>
                            <div class="activity-time">KES 5,000 - General Fund</div>
                        </div>
                        <div class="donation-amount">KES 5,000</div>
                    </li>
                    <li class="donation-item">
                        <div class="activity-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Community Church</div>
                            <div class="activity-time">KES 25,000 - Water Project</div>
                        </div>
                        <div class="donation-amount">KES 25,000</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>