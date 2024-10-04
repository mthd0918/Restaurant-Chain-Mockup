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
        return sprintf(
            "Location Name: %s Address: %s City: %s State: %s Zip Code: %d Employees: %s isOpen: %s",
            $this->name,
            $this->address,
            $this->city,
            $this->state,
            $this->zipCode,
            implode(', ', $this->employees),
            $this->isOpen ? 'Yes' : 'No'
        );
    }

    public function toHTML(): string
    {
        $employeesHTML = array_map(function($employee) {
            return $employee->toHTML();
        }, $this->employees);

        return sprintf("
            <div>
                <p>Location Name: %s</p>
                <p>Address: %s</p>
                <p>City: %s</p>
                <p>State: %s</p>
                <p>Zip Code: %d</p>
                <p>Employees: %s</p>
                <p>isOpen: %s</p>
            </div>
            ",
            $this->name,
            $this->address,
            $this->city,
            $this->state,
            $this->zipCode,
            implode(', ', $employeesHTML),
            $this->isOpen ? 'Yes' : 'No'
    );

    }

    public function toMarkDown(): string
    {
        $employeesMarkdown = array_map(function($employee) {
            return $employee->toMarkDown();
        }, $this->employees);

        return sprintf("
                ## Location: %s
                - Address: %s
                - City: %s
                - State: %s
                - Zip Code: %s
                ### Employees:
                %s
                - Is Open: %s
                ",
            $this->name,
            $this->address,
            $this->city,
            $this->state,
            $this->zipCode,
            implode("\n", $employeesMarkdown),
            $this->isOpen ? 'Yes' : 'No'
        );
    }

    public function toArray(): array
    {
        return [
            'locationName' => $this->name,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'zipCode' => $this->zipCode,
            'employees' => $this->employees,
            'isOpen' => $this->isOpen
        ];
    }
}