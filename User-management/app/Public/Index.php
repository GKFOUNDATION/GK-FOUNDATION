<?php
// Enable error reporting for debugging
<?php
// Simple direct includes
require_once 'app/Database.php';
require_once 'app/interfaces.php';
require_once 'app/models.php';
require_once 'app/regularUser.php';
require_once 'app/AdminUser.php';
require_once 'app/Traits.php';
require_once 'app/UserManager.php';
// ... rest of your code
ini_set('display_errors', 1);

// Include the autoloader
require_once '../app/autoload.php';

use App\Models\RegularUser;
use App\Models\AdminUser;
use App\Models\UserManager;

// Simple HTML interface
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 1200px; margin: 0 auto; }
        .card { border: 1px solid #ddd; padding: 20px; margin: 10px 0; border-radius: 5px; }
        .success { background-color: #d4edda; border-color: #c3e6cb; color: #155724; }
        .error { background-color: #f8d7da; border-color: #f5c6cb; color: #721c24; }
        .user-list { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px; }
        .user-card { border: 1px solid #ccc; padding: 15px; border-radius: 5px; }
        .admin { background-color: #fff3cd; }
        .user { background-color: #d1ecf1; }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Management System</h1>
        
        <?php
        try {
            // Handle form submissions
            if ($_POST) {
                handleFormSubmission();
            }
            
            // Display user creation form
            displayUserForm();
            
            // Display all users
            displayAllUsers();
            
        } catch (Exception $e) {
            echo "<div class='card error'>Error: " . $e->getMessage() . "</div>";
        }
        ?>
    </div>
</body>
</html>

<?php
function handleFormSubmission() {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'create_user':
                createNewUser();
                break;
            case 'create_admin':
                createNewAdmin();
                break;
            case 'delete_user':
                deleteUser();
                break;
        }
    }
}

function createNewUser() {
    $user = new RegularUser(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['password']
    );
    
    if ($user->save()) {
        echo "<div class='card success'>Regular user created successfully!</div>";
    } else {
        echo "<div class='card error'>Failed to create user.</div>";
    }
}

function createNewAdmin() {
    $admin = new AdminUser(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['password'],
        ['manage_users', 'view_reports']
    );
    
    if ($admin->save()) {
        echo "<div class='card success'>Admin user created successfully!</div>";
    } else {
        echo "<div class='card error'>Failed to create admin user.</div>";
    }
}

function deleteUser() {
    $user = RegularUser::findById($_POST['user_id']);
    if ($user && $user->delete()) {
        echo "<div class='card success'>User deleted successfully!</div>";
    } else {
        echo "<div class='card error'>Failed to delete user.</div>";
    }
}

function displayUserForm() {
    ?>
    <div class="card">
        <h2>Create New User</h2>
        <form method="POST">
            <input type="hidden" name="action" value="create_user">
            <p>
                <label>First Name: </label>
                <input type="text" name="firstName" required>
            </p>
            <p>
                <label>Last Name: </label>
                <input type="text" name="lastName" required>
            </p>
            <p>
                <label>Email: </label>
                <input type="email" name="email" required>
            </p>
            <p>
                <label>Password: </label>
                <input type="password" name="password" required>
            </p>
            <button type="submit">Create Regular User</button>
        </form>
        
        <form method="POST" style="margin-top: 20px;">
            <input type="hidden" name="action" value="create_admin">
            <p>
                <label>First Name: </label>
                <input type="text" name="firstName" required>
            </p>
            <p>
                <label>Last Name: </label>
                <input type="text" name="lastName" required>
            </p>
            <p>
                <label>Email: </label>
                <input type="email" name="email" required>
            </p>
            <p>
                <label>Password: </label>
                <input type="password" name="password" required>
            </p>
            <button type="submit" style="background-color: #ffc107;">Create Admin User</button>
        </form>
    </div>
    <?php
}

function displayAllUsers() {
    $userManager = new UserManager();
    $users = $userManager->getAllUsers();
    
    echo "<div class='card'>";
    echo "<h2>All Users (" . count($users) . ")</h2>";
    
    if (empty($users)) {
        echo "<p>No users found.</p>";
    } else {
        echo "<div class='user-list'>";
        foreach ($users as $user) {
            $userType = $user->role === 'admin' ? 'admin' : 'user';
            echo "<div class='user-card $userType'>";
            echo "<h3>" . htmlspecialchars($user->getFullName()) . "</h3>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($user->email) . "</p>";
            echo "<p><strong>Role:</strong> " . htmlspecialchars($user->role) . "</p>";
            echo "<p><strong>Status:</strong> " . ($user->isActive ? 'Active' : 'Inactive') . "</p>";
            echo "<p><strong>Created:</strong> " . htmlspecialchars($user->createdAt) . "</p>";
            
            // Delete form
            echo "<form method='POST' style='margin-top: 10px;'>";
            echo "<input type='hidden' name='action' value='delete_user'>";
            echo "<input type='hidden' name='user_id' value='" . $user->id . "'>";
            echo "<button type='submit' style='background-color: #dc3545; color: white;'>Delete</button>";
            echo "</form>";
            
            echo "</div>";
        }
        echo "</div>";
    }
    
    echo "</div>";
}
?>