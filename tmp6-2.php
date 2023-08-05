<?php

// Bad
class User
{
    private function run(): void
    {
        echo "Runing .....";
    }

    private string $name;
    private int $age;

    public function setName(string $name): self
    {
        return $this->name = $name;

        return $this;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    protected function sayHello(): void
    {
        echo "Hello, my name is $this->name and I'm $this->age years old.";
    }
}

// Good
class User
{
    // Class properties
    private string $name;
    private int $age;

    // Methods
    public function setName(string $name): self
    {
        return $this->name = $name;

        return $this;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    protected function sayHello(): void
    {
        echo "Hello, my name is $this->name and I'm $this->age years old.";
    }

    private function run(): void
    {
        echo "Runing .....";
    }
}
