<?php

// Bad
class PrintExample
{
    private string $property;

    public function __construct()
    {
        $this->property = "Hello";
    }

    public function printMessage(): void
    {
        echo $this->property . " World!";
    }
}

?>


<?php
// Good
// Class, methods definition with opening brace on a new line
// No trailing whitespace at the end of lines
class PrintExample
{
    private $property;

    public function __construct()
    {
        $this->property = "Hello";
    }

    public function printMessage(): void
    {
        echo $this->property . " World!";
    }
}

// Omitting closing PHP tag at the end of the file

// Bad
class App
{
    //
}

class DatabaseConnection
{
    public function connect(): void
    {
        //
    }

    public function query($sql): void
    {
        //
    }
}

class AuthManager
{
    public function login($username, $password): void
    {
        //
    }

    public function login($username, $password): void
    {
        //
    }
}

class EmailService
{
    public function sendWelcomeEmail($email): void
    {
        //
    }

    public function sendEmail(): void
    {
        //
    }

    public function saveEmailToDatabase(): void
    {
        //
    }
}






// Bad
class Customer
{
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function findByName(string $name): Customer
    {
        // ...
    }
}

// Good
class Customer
{
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}

class CustomerRepository
{
    public function findByName(string $name): Customer
    {
        // ...
    }
}



// Bad
class FileDataProcessing
{
    public function readFile(string $filePath): string
    {
        // Read data from file
    }

    public function writeFile(string $data): void
    {
        // Write new data to file
    }

    public function handleData(): void
    {
        $this->readFile('path_to_file');

        // Processing data ...

        $this->writeFile('new data');
    }
}

// Good
class FileDataProcessing
{
    public function handleData(): void
    {
        $fileIO = new FileIO();
        $fileIO->readFile('path_to_file');

        // Processing data ...

        $fileIO->writeFile('new data');
    }
}

class FileIO
{
    public function readFile(string $filePath): string
    {
        // Read data from file
    }

    public function writeFile(string $data): void
    {
        // Write new data to file
    }
}

// Bad
class Shape
{
    public function calculateArea(string $shapeType, float $dimensions): ?float
    {
        if ($shapeType === 'circle') {
            // Calculate the area of a circle based on the radius
            return pi() * pow($dimensions['radius'], 2);
        }

        if ($shapeType === 'rectangle') {
            // Calculate area of rectangle based on width and height
            return $dimensions['width'] * $dimensions['height'];
        }

        // What if you want to calculate more area of squares or other shapes???
        // You need to modified this class ...

        return null;
    }
}

// Good
interface ShapeInterface
{
    public function calculateArea(): ?float;
}

class CircleShape implements ShapeInterface
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea(): ?float
    {
        return pi() * pow($this->radius, 2);
    }
}

class RectangleShape implements ShapeInterface
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): ?float
    {
        return $this->width * $this->height;
    }
}
