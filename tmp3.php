<?php

// Bad
// src/Controller/home-controller.php
class homeController
{
    public function index(): void
    {
        // do something
    }
}

?>

<?php

// Good
// src/Controller/HomeController.php
namespace App\Controller;

class HomeController
{
    public function index(): void
    {
        // do something
    }
}








// Bad
class UserClass
{
    //
}

function updateUserStatus(UserClass $user, string $newStatus): void
{
    //
}

// Good
class User
{
    //
}

function updateUserStatus(User $user, string $newStatus): void
{
    //
}



// Bad
abstract class Shape
{
    // ...
}

interface Logger
{
    // ...
}

trait Loggable
{
    // ...
}

class DatabaseConnection extends Exception
{
    // ...
}

class Circle extends Shape
{
    use Loggable;

    // ...
}

// Good
// Abstract class with "Abstract" prefix
abstract class AbstractShape
{
    // ...
}

// Interface with "Interface" suffix
interface LoggerInterface
{
    // ...
}

// Trait with "Trait" suffix
trait LoggableTrait
{
    // ...
}

// Exception with "Exception" suffix
class DatabaseConnectionException extends Exception
{
    // ...
}

// Concrete class extending the abstract class and using the trait
class Circle extends AbstractShape
{
    use LoggableTrait;

    // ...
}



/**
 * This function returns a string or null.
 *
 * @param string $name
 * @return string|null Name or null if the name is not found.
 *
 * @deprecated This function is deprecated since PHP 8.0. Use `get_person_name_v2()` instead.
 */
function getName(string $name): ?string
{
    if ($name === "") {
        return null;
    }

    return $name;
}

















// Bad
/**
 * Devide 2 number and returns the result
 *
 * @param float|int $a The numberator
 * @param int|float $b The denominator (must not br zero)
 * @return null|float The Result or null if $b is zero
 */
function devide($a, $b): ?float
{
    if ($b === 0) {
        return null;
    }

    // This code need to remove
    // if (true) {
    //     return 0;
    // }

    return (float) ($a / $b);
}



// Good
/**
 * Devide 2 number and returns the result
 *
 * @param int|float $a The numberator
 * @param int|float $b The denominator (must not br zero)
 * @return float|null The Result or null if $b is zero
 * @deprecated This function is deprecated since v2.0. Use `div()` instead.
 */
function devide($a, $b): ?float
{
    if ($b === 0) {
        return null;
    }

    return (float) ($a / $b);
}




// Bad (without comments)
function factorial(int $number): int
{
    if ($number === 0) {
        return 1;
    }

    return $number * factorial($number - 1);
}


// Good (with comments)
/**
 * Computes the factorial of a number.
 *
 * @param int $number The number to compute the factorial of.
 * @return int The value of the factorial of the number.
 */
function factorial(int $number): int
{
    // If the number is 0, the factorial is 1.
    if ($number === 0) {
        return 1;
    }

    // Otherwise, the factorial is the product of all the numbers from 1 to the number.
    return $number * factorial($number - 1);
}



