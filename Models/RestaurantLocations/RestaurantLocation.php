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

    public function toNameString(): string {
        return sprintf("\n\t■%s\n", $this->name);
    }

    public function toNameHTML(): string {
        return sprintf("<p>%s</p>", $this->name);
    }

    public function toNameMarkdown(): string {
        return sprintf("### %s\n", $this->name);
    }

    public function toNameArray(): array {
        return ["name" => $this->name];
    }    

    public function toString(): string {
        return sprintf(
            "\t・Company Name: %s, Address: %s, Zip Code: %s\n\n",
            $this->name,
            $this->address,
            $this->zipCode
        );
    }

    public function toHTML(): string {
        return sprintf(
            "<p>Company Name: %s, Address: %s, Zip Code: %s</p>",
            $this->name,
            $this->address,
            $this->zipCode,
        );
    }

    public function toMarkdown(): string {
        return "- Company Name: ".$this->name.", Address: ".$this->address.", Zip Code: ".$this->zipCode."\n";
    }

    public function toArray(): array {
        return  ["name" => $this->name,
                 "address" => $this->address,
                 "zipCode" => $this->zipCode];
    }
}
?>