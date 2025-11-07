<?php
// app/Traits/Authenticatable.php
namespace App\Traits;

trait Authenticatable {
    public function hashPassword(string $password): string {
        return password_hash($password, PASSWORD_DEFAULT);
    }
    
    public function verifyPassword(string $password, string $hash): bool {
        return password_verify($password, $hash);
    }
}
?>