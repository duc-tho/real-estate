<?php
// | src/Entity
// |-- User.php
// |-- Role.php
namespace App\Entity\User;

use App\Entity\Role;

class User extends Entity implements ChangeLogInterface, CacheInterface
{
    // Class properties
    private string $name;
    private int $age;

    // Constructor
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // Methods
    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function hasRole(Role $role): bool
    {
        return true;
    }

    protected function sayHello(): void
    {
        echo "Hello, my name is $this->name and I'm $this->age years old.";
    }

    private function anotherMethod($arg1, $arg2, $arg3, $arg4, $arg5): void
    {
        // Method implementation
    }
}


// User.php
// Bad
class UserEntity extends Entity implements
    ChangeLogInterface,
    CacheInterface
{
    //
}

// Good
class User extends Entity implements ChangeLogInterface, CacheInterface
{
    //
}




// Bad
function execute(string $name, string $age, string $address, string $email, string $phone, string $gender): void
{
    // ...
}

// Create object to store params as attributes
// Good
function execute(User $user): void
{
    // ...
}
