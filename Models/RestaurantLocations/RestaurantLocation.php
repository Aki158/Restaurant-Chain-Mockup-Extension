<?php

namespace Models\RestaurantLocations;

use Interfaces\FileConvertible;

class RestaurantLocation implements FileConvertible{
    private string $name;
    private string $address;
    private string $city;
    private string $state;
    private string $zipCode;
    private array $employees;
    private bool $isOpen;
    private bool $hasDriveThru;

    public function __construct(
        string $name, string $address, string $city,
        string $state, string $zipCode, array $employees,
        bool $isOpen, bool $hasDriveThru
    ) {
        $this->name = $name;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
        $this->employees = $employees;
        $this->isOpen = $isOpen;
        $this->hasDriveThru = $hasDriveThru;
    }

    public function getEmployees(): array {
        return $this->employees;
    }

    public function toString(): string {
        return sprintf(
            "Name: %s\nAddress: %s\nCity: %s\nState: %s\nzipCode: %s\nisOpen: %d\nHasDriveThru: %d\n",
            $this->name,
            $this->address,
            $this->city,
            $this->state,
            $this->zipCode,
            $this->isOpen,
            $this->hasDriveThru
        );
    }

    public function toHTML(): string {
        return sprintf(
            '<p>Company Name: %s, Address: %s, Zip Code: %s</p>',
            $this->name,
            $this->address,
            $this->zipCode,
        );
    }

    public function toNameHTML(): string {
        return sprintf(
            "<p>%s</p>",
            $this->name
        );
    }

    public function toMarkdown(): string {
        return " - Name: {$this->name}
                 - Address: {$this->address}
                 - City: {$this->city}
                 - State: {$this->state}
                 - Zip Code: {$this->zipCode}
                 - Is Open: {$this->isOpen}
                 - Has Drive Thru: {$this->hasDriveThru}";
    }
  
    public function toArray(): array {
        return  ['name' => $this->name,
                 'address' => $this->address,
                 'city' => $this->city,
                 'state' => $this->state,
                 'zipCode' => $this->zipCode,
                 'isOpen' => $this->isOpen,
                 'hasDriveThru' => $this->hasDriveThru];
    }
}
?>