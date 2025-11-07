<?php
// about.php - Standalone version
// 1. Set the page title for the browser tab
$page_title = "About Us - George Kithi Foundation";

// 2. Include the database connection (required for the entire site)
require_once __DIR__ . '/includes/db.php';

// 3. Include the site header (opens HTML structure, loads navigation)
include __DIR__ . '/includes/header.php';
?>

<!-- 4. Include the specific content for the About Us page -->
<?php 
// This loads the HTML/PHP content from the file located in the 'home' directory.
require_once __DIR__ . '/home/content-about.php'; 
?>

<?php 
// 5. Include the site footer (closes remaining HTML structure, loads scripts)
include __DIR__ . '/includes/footer.php'; 
?>