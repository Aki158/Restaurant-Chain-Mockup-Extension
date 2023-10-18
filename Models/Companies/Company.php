<?php

namespace Models\Companies;

use Interfaces\FileConvertible;

class Company implements FileConvertible{
    private string $name;
    private int $foundingYear;
    private string $description;
    private string $website;
    private string $phone;
    private string $industry;
    private string $ceo;
    private bool $isPublicityTraded;
    private string $country;
    private string $founder;
    private int $totalEmployees;

    public function __construct(
        string $name, int $foundingYear, string $description,
        string $website, string $phone, string $industry,
        string $ceo, bool $isPublicityTraded, string $country,
        string $founder, int $totalEmployees
    ) {
        $this->name = $name;
        $this->foundingYear = $foundingYear;
        $this->description = $description;
        $this->website = $website;
        $this->phone = $phone;
        $this->industry = $industry;
        $this->ceo = $ceo;
        $this->isPublicityTraded = $isPublicityTraded;
        $this->country = $country;
        $this->founder = $founder;
        $this->totalEmployees = $totalEmployees;
    }

    public function getName(): string {
        return $this->name;
    }    

    public function toString(): string {
        return sprintf(
            "name: %s\nFounding Year: %d\ndescription: %s\nwebsite: %d\nphone: %s\nindustry: %s\nceo: %s\nisPublicityTraded: %d\ncountry: %s\nfounder: %s\ntotalEmployees: %d\n",
            $this->name,
            $this->foundingYear,
            $this->description,
            $this->website,
            $this->phone,
            $this->industry,
            $this->ceo,
            $this->isPublicityTraded,
            $this->country,
            $this->founder,
            $this->totalEmployees
        );
    }

    public function toHTML(): string {
        return sprintf("
            <p>name: %s</p>
            <p>Founding Year: %d</p>
            <p>description: %s</p>
            <p>website: %d</p>
            <p>phone: %s</p>
            <p>industry: %s</p>
            <p>ceo: %s</p>
            <p>isPublicityTraded: %d</p>
            <p>country: %s</p>
            <p>founder: %s</p>
            <p>totalEmployees: %d</p>",
            $this->name,
            $this->foundingYear,
            $this->description,
            $this->website,
            $this->phone,
            $this->industry,
            $this->ceo,
            $this->isPublicityTraded,
            $this->country,
            $this->founder,
            $this->totalEmployees
        );
    }

    public function toMarkdown(): string {
        return "- Name: {$this->name}
                - Founding Year: {$this->foundingYear}
                - Description: {$this->description}
                - Website: {$this->website}
                - Phone: {$this->phone}
                - Industry: {$this->industry}
                - CEO: {$this->ceo}
                - Is Publicity Traded: {$this->isPublicityTraded}
                - Country: {$this->country}
                - Founder: {$this->founder}
                - Total Employees: {$this->totalEmployees}";
    }
  
    public function toArray(): array {
        return  [
            "name" => $this->name,
            "foundingYear" => $this->foundingYear,
            "description" => $this->description,
            "website" => $this->website,
            "phone" => $this->phone,
            "industry" => $this->industry,
            "ceo" => $this->ceo,
            "isPublicityTraded" => $this->isPublicityTraded,
            "country" => $this->country,
            "founder" => $this->founder,
            "totalEmployees" => $this->totalEmployees
        ];
    }
}
?>