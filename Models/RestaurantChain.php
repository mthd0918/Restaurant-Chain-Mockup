<?php
namespace Models;

use Interfaces\FileConvertible;
use Models\Company;

class RestaurantChain extends Company implements FileConvertible
{
    public int $chainId;
    public array $restaurantLocations; // RestaurantLocation[]
    public string $cuisineType;
    public int $numberOfLocations;
    public string $parentCompany;

    public function __construct(
        int $chainId,
        array $restaurantLocations,
        string $cuisineType,
        int $numberOfLocations,
        string $parentCompany,
        string $name,
        int $foundingYear,
        string $description,
        string $website,
        string $phone,
        string $industry,
        string $ceo,
        bool $isPubliclyTraded,
        string $country,
        string $founder,
        int $totalEmployees
    ) {
        parent::__construct($name, $foundingYear, $description, $website, $phone, $industry, $ceo, $isPubliclyTraded, $country, $founder, $totalEmployees);
        $this->chainId = $chainId;
        $this->restaurantLocations = $restaurantLocations;
        $this->cuisineType = $cuisineType;
        $this->numberOfLocations = $numberOfLocations;
        $this->parentCompany = $parentCompany;
    }

    // FileConvertible インターフェースのメソッドをオーバーライド
    // public function toHTML(): string
    // {

    // }

    // public function toMarkDown(): string
    // {

    // }

    // public function toArray(): array
    // {

    // }
}