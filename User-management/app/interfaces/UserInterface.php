<?php
// app/Interfaces/UserInterface.php
namespace App\Interfaces;

interface UserInterface {
    public function authenticate(string $password): bool;
    public function getFullName(): string;
    public function isActive(): bool;
    public function toArray(): array;
}
?>