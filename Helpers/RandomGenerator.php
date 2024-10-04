<?php
namespace Helpers;

use Faker\Factory;
use Models\Company;
use Models\Employee;
use Models\RestaurantLocation;

class RandomGenerator {
    public static function company(): Company {
        $faker = Factory::create();

        return new Company(
            $faker->company,
            $faker->year,
            $faker->sentence(10),
            $faker->url,
            $faker->phoneNumber,
            $faker->bs,
            $faker->name,
            $faker->boolean(70),
            $faker->country,
            $faker->name,
            $faker->numberBetween(5, 100000)
        );
    }

    public static function companies(int $min, int $max): array {
        $faker = Factory::create();
        $companies = [];
        $numberOfCompany = $faker->numberBetween($min, $max);

        for ($i = 0; $i < $numberOfCompany; $i++) {
            $companies[] = self::company();
        }

        return $companies;
    }

    public static function employee(): Employee {
        $faker = Factory::create();

        return new Employee(
            $faker->randomNumber(),
            $faker->firstName(),
            $faker->lastName(),
            $faker->email,
            $faker->password,
            $faker->phoneNumber,
            $faker->address,
            $faker->dateTimeThisCentury,
            $faker->dateTimeBetween('-10 years', '+20 years'),
            $faker->randomElement(['admin', 'user', 'editor']),
            $faker->jobTitle,
            $faker->randomFloat(2, 30000, 200000),
            $faker->dateTimeBetween('-10 years', 'now'),
            $faker->words($faker->numberBetween(0, 5))
        );
    }

    public static function employees(int $min, int $max): array {
        $faker = Factory::create();
        $employees = [];
        $numOfEmployees = $faker->numberBetween($min, $max);

        for ($i = 0; $i < $numOfEmployees; $i++) {
            $employees[] = self::employee();
        }

        return $employees;
    }

    public static function restaurantLocation(): RestaurantLocation {
        $faker = Factory::create();

        return new RestaurantLocation(
            $faker->name,
            $faker->streetAddress,
            $faker->city,
            $faker->state,
            $faker->postcode,
            self::employees(5, 20),
            $faker->boolean(80)
        );
    }

    public static function restaurantLocations(int $min, int $max): array {
        $faker = Factory::create();
        $restaurantLocations = [];
        $numOfLocations = $faker->numberBetween($min, $max);

        for ($i = 0; $i < $numOfLocations; $i++) {
            $restaurantLocations[] = self::restaurantLocation();
        }

        return $restaurantLocations;
    }
}