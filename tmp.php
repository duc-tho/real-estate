<?php

$a = 10;
$b = "10";

var_dump($a == $b); // true
var_dump($a === $b); // false


// -------------------------------------------------
$values = [1, 2, '3', '4', '5'];

$index = array_search(5, $values); // $index = 4

// Bad (Output: "Found: 5")
if ($values[$index] == 5) {
    echo "Found value 5";
} else {
    echo "The value 5 not found";
}

// Good (Output: "Value not found!")
if ($values[$index] === 5) {
    echo "Found value 5";
} else {
    echo "The value 5 not found";
}



// Bad
$defaultOptions = [
    'vi' => 'Vietnamese',
    'en' => 'English'
];

// Good
$defaultOptions = [
    'vi' => 'Vietnamese',
    'en' => 'English',
];

// -------------------------------------------------

// Good
// Arithmetic Operators
$a = 5;
$b = 10;

$sum = $a + $b;
$subtract = $a - $b;
$multiply = $a * $b;
$divide = $a / $b;
$modulus = $a % $b;

// Comparison Operators
if ($a == $b) {
    // ...
}

if ($x > $y && $y < $z) {
    // ...
}

// Good
// Logical Operators
$logicalAnd = $a && $b;
$logicalOr = $x || $y;

// Assignment Operators
$assignAdd = $a += $b;

// Unary Operators
$flag = true;
$value = 10;

if (!$flag) {
    // ...
}

$increment = ++$value;
$decrement = --$value;

$string = "Hi" . " there!";


// Bad
// Arithmetic Operators
$a=5;
$b=10;

$sum=$a+$b;
$subtract=$a-$b;
$multiply=$a*$b;
$divide=$a/$b;
$modulus=$a%$b;

// Comparison Operators
if ($a==$b){
    // ...
}

if ($x>$y&&$y<$z) {
    // ...
}

// Bad
// Logical Operators
$logicalAnd=$a&&$b;
$logicalOr=$x||$y;

// Assignment Operators
$assignAdd=$a+=$b;

// Unary Operators
$flag=true;
$value=10;

if (! $flag) {
    // ...
}

$increment= ++ $value;
$decrement=-- $value;

$string = "Hi"." there!";

// -------------------------------------------------


// Bad
function toUpperCase($value): ?string
{
    if (!$value) return null;
	return strtoupper($value);
}

// Bad
function toUpperCase($value): ?string
{
    if (!$value)
        return null;
	return strtoupper($value);
}

// Good
function toUpperCase($value): ?string
{
    if (!$value) {
        return null;
    }

	return strtoupper($value);
}


// -------------------------------------------------
// Bad
class UserRepository
{
    private DatabaseConnection $databaseConnection;
    private AuthenticationService $authenticationService;
    private AuthorizationService $authorizationService;

    public function __construct(DatabaseConnection $databaseConnection, AuthenticationService $authenticationService, AuthorizationService $authorizationService)
    {
        $this->databaseConnection = $databaseConnection;
        $this->emailService = $emailService;
        $this->authenticationService = $authenticationService;
        $this->authorizationService = $authorizationService;
        $this->cacheManager = $cacheManager;
        $this->logger = $logger;
    }

    public function updateUserStatus(User $userId, string $newStatus): void
    {
        $user = $this->getUserById($userId);

        if ($this->authenticationService->isAuthenticated()) {
            if ($this->authorizationService->isAuthorized($user, 'update_status')) {
                if ($user->getStatus() !== $newStatus) {
                    // Update the user's status use direct sql (do NOT do this)
                    $this->databaseConnection->query("UPDATE users SET status = '$newStatus' WHERE id = $userId");

                } else {
                    // Do somthing
                }
            } else {
                // do somthing
            }
        } else {
            // Do somthing
        }
    }
}

// Good
class UserRepository
{
    private DatabaseConnection $databaseConnection;
    private AuthenticationService $authenticationService;
    private AuthorizationService $authorizationService;
    private ObjectManager $entityManager;

    public function __construct(
        DatabaseConnection $databaseConnection,
        AuthenticationService $authenticationService,
        AuthorizationService $authorizationService,
        ObjectManager $entityManager
    )
    {
        $this->databaseConnection = $databaseConnection;
        $this->emailService = $emailService;
        $this->authenticationService = $authenticationService;
        $this->authorizationService = $authorizationService;
        $this->cacheManager = $cacheManager;
        $this->logger = $logger;
        $this->entityManager = $entityManager;
    }

    public function updateUserStatus(User $userId, string $newStatus): void
    {
        $user = $this->getUserById($userId);

        if (!$this->authenticationService->isAuthenticated()) {
            // do something
            return;
        }

        if (!$this->authorizationService->isAuthorized($user, 'update_status')) {
            // do something
            return;
        }

        if (!$user->getStatus() !== $newStatus) {
            // do something
            return;
        }

        // Update the user's status use query builder
        $queryBuilder = $entityManager->createQueryBuilder();
        $queryBuilder
            ->update(User::class, 'u')
            ->set('u.status', ':newStatus')
            ->where('u.id = :userId')
            ->setParameter('newStatus', $newStatus)
            ->setParameter('userId', $userId);

    }
}








class InputArgumentMode
{
    // Bad
    const isArray = 'IsArray';
    const IsSingle = 'IsSingle';
    const is_optional = 'IsOptional';

    // Good
    const IsArray = 'IsArray';
    const IsSingle = 'IsSingle';
    const IsOptional = 'IsOptional';
}


// Bad
class Configuration
{
    const maxRetryAttempts = 5;
    const connectionTimeOut = 30;

    private string $apiKey;
    private bool $isDebugEnabled = false;
    private int $timeout;

    public function __construct(string $apiKey, int $timeout)
    {
        $this->apiKey = $apiKey;
        $this->timeout = $timeout ?? self::connectionTimeOut;
    }

    public function setDebugMode(bool $debugMode): void
    {
        $this->isDebugEnabled = $debugMode;
    }
}

// Good
// Use camelCase for PHP variables, function and method names, arguments
class Configuration
{
    // Use SCREAMING_SNAKE_CASE for constants
    const MAX_RETRY_ATTEMPTS = 5;
    const CONNECTION_TIMEOUT = 30;

    private string $apiKey;
    private bool $isDebugEnabled = false;
    private int $timeout;

    public function __construct(string $apiKey, int $timeout)
    {
        $this->apiKey = $apiKey;
        $this->timeout = $timeout ?? self::CONNECTION_TIMEOUT;
    }

    public function setDebugMode(bool $debugMode): void
    {
        $this->isDebugEnabled = $debugMode;
    }
}



// Bad
$array = [ 'a' => 1,'b' => 2,'c' => 3 ];

// Good
$array = ['a' => 1, 'b' => 2, 'c' => 3];


// src/Entity/IdInterface/EventIdInterface.php
// Bad
interface EventIdInterface
{
    public function getEventId(): ?int;
}

// Good
namespace App\Entity\IdInterface;

interface EventIdInterface
{
    public function getEventId(): ?int;
}

// src/Trait/LogTrait.php
// Bad
trait LogTrait
{
    public function writeLog(): void
    {
        // ...
    }
}

// Good
namespace App\Trait;

trait LogTrait
{
    public function writeLog(): void
    {
        // ...
    }
}
