<?php
// app/Models/AdminUser.php
namespace App\Models;

class AdminUser extends User {
    private $permissions = [];
    
    public function __construct(
        string $firstName,
        string $lastName,
        string $email,
        string $password,
        array $permissions = []
    ) {
        parent::__construct($firstName, $lastName, $email, $password, self::ROLE_ADMIN);
        $this->permissions = $permissions;
    }
    
    // Method overriding
    public function save(): bool {
        $db = Database::getInstance()->getConnection();
        
        if ($this->id) {
            return $this->update();
        }
        
        $stmt = $db->prepare("
            INSERT INTO users (firstName, lastName, email, password, role, isActive, createdAt, permissions)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)
        ");
        
        return $stmt->execute([
            $this->firstName,
            $this->lastName,
            $this->email,
            $this->password,
            $this->role,
            $this->isActive,
            $this->createdAt,
            json_encode($this->permissions)
        ]);
    }
    
    public function update(): bool {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("
            UPDATE users 
            SET firstName = ?, lastName = ?, email = ?, permissions = ?, isActive = ?
            WHERE id = ?
        ");
        
        return $stmt->execute([
            $this->firstName,
            $this->lastName,
            $this->email,
            json_encode($this->permissions),
            $this->isActive,
            $this->id
        ]);
    }
    
    public function delete(): bool {
        // Admins might have additional cleanup logic
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$this->id]);
    }
    
    // Admin-specific methods
    public function addPermission(string $permission): void {
        if (!in_array($permission, $this->permissions)) {
            $this->permissions[] = $permission;
        }
    }
    
    public function hasPermission(string $permission): bool {
        return in_array($permission, $this->permissions);
    }
    
    // Static method specific to AdminUser
    public static function getAllAdmins(): array {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE role = ?");
        $stmt->execute([self::ROLE_ADMIN]);
        $adminsData = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        $admins = [];
        foreach ($adminsData as $adminData) {
            $admins[] = static::createFromArray($adminData);
        }
        
        return $admins;
    }
    
    protected static function createFromArray(array $data): self {
        $permissions = json_decode($data['permissions'] ?? '[]', true) ?? [];
        
        $admin = new self(
            $data['firstName'],
            $data['lastName'],
            $data['email'],
            '', // Password not needed for reconstruction
            $permissions
        );
        
        $admin->id = $data['id'];
        $admin->password = $data['password'];
        $admin->isActive = (bool)$data['isActive'];
        $admin->createdAt = $data['createdAt'];
        
        return $admin;
    }
}
?>