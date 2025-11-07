<?php
// app/Models/RegularUser.php
namespace App\Models;

class RegularUser extends User {
    private $profilePicture;
    private $lastLogin;
    
    public function __construct(
        string $firstName,
        string $lastName,
        string $email,
        string $password,
        string $profilePicture = null
    ) {
        parent::__construct($firstName, $lastName, $email, $password, self::ROLE_USER);
        $this->profilePicture = $profilePicture;
    }
    
    // Method overriding - polymorphism
    public function save(): bool {
        $db = Database::getInstance()->getConnection();
        
        if ($this->id) {
            return $this->update();
        }
        
        $stmt = $db->prepare("
            INSERT INTO users (firstName, lastName, email, password, role, isActive, createdAt, profilePicture)
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
            $this->profilePicture
        ]);
    }
    
    public function update(): bool {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("
            UPDATE users 
            SET firstName = ?, lastName = ?, email = ?, profilePicture = ?, isActive = ?
            WHERE id = ?
        ");
        
        return $stmt->execute([
            $this->firstName,
            $this->lastName,
            $this->email,
            $this->profilePicture,
            $this->isActive,
            $this->id
        ]);
    }
    
    public function delete(): bool {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$this->id]);
    }
    
    public function updateLastLogin(): void {
        $this->lastLogin = date('Y-m-d H:i:s');
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("UPDATE users SET lastLogin = ? WHERE id = ?");
        $stmt->execute([$this->lastLogin, $this->id]);
    }
    
    protected static function createFromArray(array $data): self {
        $user = new self(
            $data['firstName'],
            $data['lastName'],
            $data['email'],
            '' // Password not needed for reconstruction
        );
        
        $user->id = $data['id'];
        $user->password = $data['password'];
        $user->isActive = (bool)$data['isActive'];
        $user->createdAt = $data['createdAt'];
        $user->profilePicture = $data['profilePicture'] ?? null;
        $user->lastLogin = $data['lastLogin'] ?? null;
        
        return $user;
    }
}
?>