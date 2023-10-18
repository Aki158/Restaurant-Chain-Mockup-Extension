<?php

namespace Models\Employees;

use DateTime;

use Interfaces\FileConvertible;
use Models\Users\User;

class Employee extends User implements FileConvertible{
    private string $jobTitle;
    private float $salary;
    private string $startDate;
    private array $awards;

    private string $awardsStr;

    public function __construct(
        int $id, string $firstName, string $lastName,
        string $email, string $password, string $phoneNumber,
        string $address, DateTime $birthDate, DateTime $membershipExpirationDate, 
        string $role, string $jobTitle, float $salary, 
        string $startDate, array $awards
    ) {
        parent::__construct(
            $id, $firstName, $lastName,
            $email, $password, $phoneNumber,
            $address,  $birthDate, $membershipExpirationDate,
            $role
        );
        $this->jobTitle = $jobTitle;
        $this->salary = $salary;
        $this->startDate = $startDate;
        $this->awards = $awards;

        $this->awardsStr = $this->getAwardsStr($awards);

    }

    public function getAwardsStr(array $awards): string {
        $res = "";

        for($i = 0;$i < count($awards);$i++){
            $res .= $awards[$i].", ";
        }
        return substr($res,0,strlen($res)-2);
    }

    public function toString(): string {
        return sprintf(
            "\t\t- ID: %d, Job Title: %s, Name: %s, Start Date: %s,Salary: $%f\n",
            parent::getID(),
            $this->jobTitle,
            parent::getUserName(),
            $this->startDate,
            $this->salary
        );
    }

    public function toHTML(): string {
        return sprintf(
            "<p>ID: %d, Job Title: %s, Name: %s, Start Date: %s,Salary: $%f</p>",
            parent::getID(),
            $this->jobTitle,
            parent::getUserName(),
            $this->startDate,
            $this->salary
        );
    }

    public function toMarkdown(): string {
        return "- ID: ".parent::getID().", Job Title: ".$this->jobTitle.", Name: ".parent::getUserName().", Start Date: ".$this->startDate.",  Salary: $".$this->salary."\n";
    }
  
    public function toArray(): array {
        return  [
            "id" => parent::getID(),
            "jobTitle" => $this->jobTitle,
            "name" => parent::getUserName(),
            "startDate" => $this->startDate,
            "salary" => $this->salary
        ];
    }
}
?>