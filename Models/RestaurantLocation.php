<?php
namespace Models;

use Interfaces\FileConvertible;

class RestaurantLocation implements FileConvertible
{
    public string $name;
    public string $address;
    public string $city;
    public string $state;
    public string $zipCode;
    public array $employees; // Employee[]
    public bool $isOpen;

    public function __construct(
        string $name,
        string $address,
        string $city,
        string $state,
        string $zipCode,
        array $employees,
        bool $isOpen,
    ) {
        $this->name = $name;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
        $this->employees = $employees;
        $this->isOpen = $isOpen;
    }

    public function toString(): string
    {
        // Implementation here
        return "hello";
    }

    public function toHTML(): string
    {
        // Implementation here
        return "hello";

    }

    public function toMarkDown(): string
    {
        // Implementation here
        return "hello";

    }

    public function toArray(): array
    {
        // Implementation here
        return ["hello"];

    }
}