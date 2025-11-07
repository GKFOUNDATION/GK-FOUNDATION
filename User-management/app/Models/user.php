<?php
// app/Models/User.php
namespace App\Models;

use App\Core\Database;
use App\Interfaces\UserInterface;
use App\Traits\Authenticatable;

abstract class User implements UserInterface {
    use Authenticatable;
    
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $password;
    protected $role;
    protected $isActive;
    protected $createdAt;
    
    // Constants for roles
    public const ROLE_USER = 'user';
    public const ROLE_ADMIN = 'admin';
    
    public function __construct(
        string $firstName,
        string $lastName,
        string $email,
        string $password,
        string $role = self::ROLE_USER
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $this->hashPassword($password);
        $this->role = $role;
        $this->isActive = true;
        $this->createdAt = date('Y-m-d H:i:s');
    }
    
    // Magic methods
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
    
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
    
    public function __toString(): string {
        return "User: {$this->getFullName()} ({$this->email})";
    }
    
    // Interface implementation
    public function authenticate(string $password): bool {
        return $this->verifyPassword($password, $this->password);
    }
    
    public function getFullName(): string {
        return "{$this->firstName} {$this->lastName}";
    }
    
    public function isActive(): bool {
        return $this->isActive;
    }
    
    public function toArray(): array {
        return [
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'role' => $this->role,
            'isActive' => $this->isActive,
            'createdAt' => $this->createdAt
        ];
    }
    
    // Abstract methods for database operations
    abstract public function save(): bool;
    abstract public function update(): bool;
    abstract public function delete(): bool;
    
    // Static methods
    public static function findById(int $id): ?self {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $userData = $stmt->fetch(\PDO::FETCH_ASSOC);
        
        return $userData ? static::createFromArray($userData) : null;
    }
    
    public static function findByEmail(string $email): ?self {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $userData = $stmt->fetch(\PDO::FETCH_ASSOC);
        
        return $userData ? static::createFromArray($userData) : null;
    }
    
    protected static function createFromArray(array $data): self {
        // This will be implemented in child classes
    }
}
?>