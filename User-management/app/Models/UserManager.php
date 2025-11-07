<?php
// app/Models/UserManager.php
namespace App\Models;

use App\Core\Database;

class UserManager {
    private $db;
    
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
    
    public function getAllUsers(): array {
        $stmt = $this->db->prepare("SELECT * FROM users ORDER BY createdAt DESC");
        $stmt->execute();
        $usersData = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        $users = [];
        foreach ($usersData as $userData) {
            $userClass = $userData['role'] === User::ROLE_ADMIN ? 
                AdminUser::class : RegularUser::class;
            $users[] = $userClass::createFromArray($userData);
        }
        
        return $users;
    }
    
    public function searchUsers(string $query): array {
        $stmt = $this->db->prepare("
            SELECT * FROM users 
            WHERE firstName LIKE ? OR lastName LIKE ? OR email LIKE ?
            ORDER BY firstName, lastName
        ");
        
        $searchTerm = "%$query%";
        $stmt->execute([$searchTerm, $searchTerm, $searchTerm]);
        $usersData = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        $users = [];
        foreach ($usersData as $userData) {
            $userClass = $userData['role'] === User::ROLE_ADMIN ? 
                AdminUser::class : RegularUser::class;
            $users[] = $userClass::createFromArray($userData);
        }
        
        return $users;
    }
    
    public function deactivateUser(int $userId): bool {
        $stmt = $this->db->prepare("UPDATE users SET isActive = FALSE WHERE id = ?");
        return $stmt->execute([$userId]);
    }
    
    public function activateUser(int $userId): bool {
        $stmt = $this->db->prepare("UPDATE users SET isActive = TRUE WHERE id = ?");
        return $stmt->execute([$userId]);
    }
    
    // Static properties and methods
    public static function getTotalUsers(): int {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT COUNT(*) as total FROM users");
        $stmt->execute();
        return (int)$stmt->fetch(\PDO::FETCH_ASSOC)['total'];
    }
    
    public static function getActiveUsersCount(): int {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT COUNT(*) as total FROM users WHERE isActive = TRUE");
        $stmt->execute();
        return (int)$stmt->fetch(\PDO::FETCH_ASSOC)['total'];
    }
}
?>