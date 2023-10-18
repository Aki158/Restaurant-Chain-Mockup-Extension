<?php

namespace Models\RestaurantChains;

use Interfaces\FileConvertible;
use Models\Companies\Company;

class RestaurantChain extends Company implements FileConvertible{
    private int $chainId;
    private array $restaurantLocation;
    private string $cuisineType;
    private int $numberOfLocation;
    private string $parentCompany;

    public function __construct(
        string $name, int $foundingYear, string $description,
        string $website, string $phone, string $industry,
        string $ceo, bool $isPublicityTraded, string $country,
        string $founder, int $totalEmployees,
        int $chainId, array $restaurantLocation, string $cuisineType,
        int $numberOfLocation,string $parentCompany
    ) {
        parent::__construct(
            $name, $foundingYear, $description,
            $website, $phone, $industry,
            $ceo, $isPublicityTraded, $country,
            $founder, $totalEmployees
        );
        $this->chainId = $chainId;
        $this->restaurantLocation = $restaurantLocation;
        $this->cuisineType = $cuisineType;
        $this->numberOfLocation = $numberOfLocation;
        $this->parentCompany = $parentCompany;
    }

    public function getRestaurantLocation(): array{
        return $this->restaurantLocation;
    }

    public function toString(): string {
        return sprintf(
            "Chain Id: %d\nRestaurant Locations: %s\nCuisine Type: %s\nNumber Of Location: %d\nParent Company: %s\n",
            $this->chainId,
            $this->restaurantLocation,
            $this->cuisineType,
            $this->numberOfLocation,
            $this->parentCompany
        );
    }

    public function toHTML(): string {
        return sprintf(
            "<h2>Restaurant Chain : %s</h2>
            <h2>(Number of location : %d)</h2>
            ",
            parent::toHTML(),
            $this->numberOfLocation
        );
    }

    public function toMarkdown(): string {
        return " - Chain Id: {$this->chainId}
                 - Restaurant Location: {$this->restaurantLocation}
                 - Cuisine Type: {$this->cuisineType}
                 - Number Of Location: {$this->numberOfLocation}
                 - Parent Company: {$this->parentCompany}";
    }
  
    public function toArray(): array {
        return [
            'chainId' => $this->chainId,
            'restaurantLocation' => $this->restaurantLocation,
            'cuisineType' => $this->cuisineType,
            'numberOfLocation' => $this->numberOfLocation,
            'parentCompany' => $this->parentCompany
        ];
    }
}
?>