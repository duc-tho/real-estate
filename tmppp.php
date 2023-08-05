<?php

function processValue(int $value): string
{
    // if example
    // Bad
    if ($value === 1) {
        return 'Value is 1';
    } else if ($value === 2) {
        throw new Exception('Value is 2');
    }

    // Good
    if ($value === 1) {
        return 'Value is 1';
    }

    if ($value === 2) {
        throw new Exception('Value is 2');
    }
}

function processValue(int $value): string
{
    // switch - case example
    // Bad
    switch ($value) {
        case 1:
            return 'Value is 1';
            break;

        case 2:
            throw new Exception('Value is 2');
            break;
    }

    // Good
    switch ($value) {
        case 1:
            return 'Value is 1';

        case 2:
            throw new Exception('Value is 2');
    }

    return '';
}

// Bad
class Product
{
    private string $name;
    private string $price;
    private float $discount;

    public function __construct(string $name, float $price, float $discount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function calculatePrice(): float
    {
        if ($this->discount === 0.9) {
            return $this->price * 0.9;
        }

        if ($this->discount === 0.8) {
            return $this->price * 0.8;
        }

        if ($this->discount === 0.95) {
            return $this->price * 0.95;
        }

        return $this->price;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

// Good
interface DiscountInterface
{
    public function applyDiscount(float $price): float;
}

class MondayDiscount implements DiscountInterface
{
    public function applyDiscount(float $price): float
    {
        return $price * 0.8;
    }
}

class BirthdayDiscount implements DiscountInterface
{
    public function applyDiscount(float $price): float
    {
        return $price * 0.9;
    }
}

class WeekendDiscount implements DiscountInterface
{
    public function applyDiscount(float $price): float
    {
        return $price * 0.95;
    }
}

class Product
{
    private string $name;
    private string $price;
    private DiscountInterface $discount;

    public function __construct(string $name, float $price, DiscountInterface $discount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function calculatePrice(): float
    {
        return $this->discount->applyDiscount($this->price);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
