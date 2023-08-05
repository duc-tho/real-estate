<?php

namespace App\Entity\User;

// Bad
class User
{
    public function hasRole(
        Role $role,
        $param1,
        $param2,
        $param3
    ): bool
    {
        return true;
    }
}


$user =new User;
?>

<?php

namespace App\Entity\User;

// Good
class User
{
    // Declare all the arguments on the same line
    public function hasRole(Role $role, $param1, $param2, $param3): bool
    {
        return true;
    }
}

// Use parentheses ”()” when instantiating classes
$user = new User();





