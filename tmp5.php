<?php


use App\Controller\DatabaseConnection;
use App\Controller\DatabaseConnectionException;

// Function to log exceptions
function logException(Throwable $exception): void
{
    $timestamp = date("Y-m-d H:i:s");
    $exceptionType = get_class($exception);
    $errorMessage = $exception->getMessage();
    $errorLocation = $exception->getFile() . " on line " . $exception->getLine();
    $environment = "production";

    $logMessage = "[$timestamp] [$exceptionType] $errorMessage"
        . "| Location: $errorLocation | Environment: $environment\n";

    file_put_contents("error_log.txt", $logMessage, FILE_APPEND);
}

// Bad
try {
    // Fetch data from the database
    $entityManager = $this->getDoctrine()->getManager();
    $query = $entityManager->createQuery('SELECT * FROM user');
    $results = $query->getResult();

} catch (Throwable $e) {
    //
}

// Good
try {
    // Fetch data from the database
    $entityManager = $this->getDoctrine()->getManager();
    $query = $entityManager->createQuery('SELECT * FROM user');
    $results = $query->getResult();
} catch (Throwable $e) {
    // Log the exception
    logException($e);
    throw new DatabaseConnectionException("Can't connect to database.");
}

class User {}

function exampleThrow($param): void
{
    // Bad
    throw new ErrorException(User::class . ' error occourred while processing parameter `' . $param . '`');

    // Good
    throw new ErrorException(ucfirst(User::class) . ' error occourred while processing parameter "' . $param . '"');
}


