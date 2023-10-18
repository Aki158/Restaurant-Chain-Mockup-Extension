<?php

namespace Helpers;

use Faker\Factory;

use Models\Employees\Employee;
use Models\RestaurantChains\RestaurantChain;
use Models\RestaurantLocations\RestaurantLocation;

class RandomGenerator {
    public static function restaurantChain(
                                        int $countEmployee, 
                                        int $salaryMinNum, 
                                        int $salaryMaxNum, 
                                        int $countRestaurantLocation, 
                                        int $postalCodeMinNum, 
                                        int $postalCodeMaxNum
                                        ): RestaurantChain {
        $faker = Factory::create();

        return new RestaurantChain(
            $faker->company(),
            (int)$faker->year(),
            $faker->realText(),
            $faker->url(),
            $faker->phoneNumber(),
            $faker->randomElement(["IT", "food", "Agriculture"]),
            $faker->name(),
            $faker->boolean(),
            $faker->country(),
            $faker->name(),
            $faker->randomNumber(),
            $faker->randomNumber(4, true),
            self::restaurantLocations($countEmployee, $salaryMinNum, $salaryMaxNum, $countRestaurantLocation, $postalCodeMinNum, $postalCodeMaxNum),
            $faker->randomElement(["Hamburgers", "curry", "pasta", "grilled fish", "tempura"]),
            $countRestaurantLocation,
            $faker->company()
        );
    }

    public static function restaurantLocation(
        int $countEmployee, 
        int $salaryMinNum, 
        int $salaryMaxNum, 
        int $postalCodeMinNum, 
        int $postalCodeMaxNum
    ): RestaurantLocation {
        $faker = Factory::create();
        
        return new RestaurantLocation(
            $faker->name(),
            $faker->address(),
            $faker->city(),
            $faker->randomElement(["Crowded", "Moderate", "Empty"]),
            self::generatePostCode($postalCodeMinNum, $postalCodeMaxNum),
            self::employees($countEmployee, $salaryMinNum, $salaryMaxNum),
            $faker->boolean(),
            $faker->boolean()
            );
    }

    public static function generatePostCode(int $postalCodeMinNum, int $postalCodeMaxNum): string{
        $faker = Factory::create();
        $postCode = (string)$faker->numberBetween($postalCodeMinNum,$postalCodeMaxNum);
        
        return substr($postCode, 0, 3)."-".substr($postCode, 3, 4);
    }

    public static function employee(int $salaryMinNum, int $salaryMaxNum): Employee {
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
            $faker->dateTimeBetween("-10 years", "+20 years"),
            $faker->randomElement(["admin", "user", "editor"]),
            $faker->jobTitle(),
            $faker->randomFloat(4, $salaryMinNum, $salaryMaxNum),
            $faker->date(),
            array($faker->randomElement(["Good design","Good taste", "Good Customer service"]))
        );
    }

    public static function restaurantChains(
                                            int $min, 
                                            int $max, 
                                            int $countEmployee, 
                                            int $salaryMinNum, 
                                            int $salaryMaxNum, 
                                            int $countRestaurantLocation, 
                                            int $postalCodeMinNum, 
                                            int $postalCodeMaxNum
                                            ): array {
        $faker = Factory::create();
        $arr = [];
        $l = $faker->numberBetween($min, $max);

        for ($i = 0; $i < $l; $i++) {
            $arr[$i] = self::restaurantChain(
                                            $countEmployee, 
                                            $salaryMinNum, 
                                            $salaryMaxNum, 
                                            $countRestaurantLocation, 
                                            $postalCodeMinNum, 
                                            $postalCodeMaxNum
                                            );
        }
        return $arr;
    }

    public static function restaurantLocations(
                                                int $countEmployee, 
                                                int $salaryMinNum, 
                                                int $salaryMaxNum, 
                                                int $countRestaurantLocation, 
                                                int $postalCodeMinNum, 
                                                int $postalCodeMaxNum
                                            ): array {
        $arr = [];

        for ($i = 0; $i < $countRestaurantLocation; $i++) {
            $arr[$i] = self::restaurantLocation(
                                            $countEmployee, 
                                            $salaryMinNum, 
                                            $salaryMaxNum, 
                                            $postalCodeMinNum, 
                                            $postalCodeMaxNum
                                            );
        }
        return $arr;
    }

    public static function employees(int $countEmployee, int $salaryMinNum, int $salaryMaxNum): array {
        $arr = [];

        for ($i = 0; $i < $countEmployee; $i++) {
            $arr[$i] = self::employee($salaryMinNum, $salaryMaxNum);
        }
        return $arr;
    }
}
?>