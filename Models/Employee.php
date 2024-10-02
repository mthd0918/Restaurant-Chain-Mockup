<?php
namespace Models;

use Interfaces\FileConvertible;
use DateTime;

class Employee implements FileConvertible
{
    public string $jobTitle;
    public float $salary;
    public DateTime $startDate;
    public array $awards; // string[]

    public function __construct(
        string $jobTitle,
        float $salary,
        DateTime $startDate,
        array $awards
    ) {
        $this->jobTitle = $jobTitle;
        $this->salary = $salary;
        $this->startDate = $startDate;
        $this->awards = $awards;
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