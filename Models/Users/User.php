<?php

namespace Models\Users;

use Datetime;

use Interfaces\FileConvertible;

class User implements FileConvertible{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;
    private string $phoneNumber;
    private string $address;
    private string $birthDate;
    private string $membershipExpirationDate;
    private string $role;
    private string $hashedPassword;

    public function __construct(
        int $id, string $firstName, string $lastName, string $email, 
        string $password, string $phoneNumber, string $address, 
        DateTime $birthDate, DateTime $membershipExpirationDate, string $role
    ) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
        $this->birthDate = $birthDate->format('Y-m-d');
        $this->membershipExpirationDate = $membershipExpirationDate->format('Y-m-d');
        $this->role = $role;
        $this->hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    }

    public function login(string $password): bool {
        return password_verify($password, $this->hashedPassword);
    }

    public function updateProfile(string $address, string $phoneNumber): void {
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
    }

    public function renewMembership(DateTime $expirationDate): void {
        $this->membershipExpirationDate = $expirationDate;
    }

    public function changePassword(string $newPassword): void {
        $this->hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    }

    public function hasMembershipExpired(): bool {
        $currentDate = new DateTime();
        return $currentDate > $this->membershipExpirationDate;
    }

    public function getID(): int {
        return $this->id;
    }

    public function getUserName(): string {
        return $this->firstName." ".$this->lastName;
    }

    public function toString(): string {
        return sprintf(
            "User ID: %d\nName: %s %s\nEmail: %s\nPhone Number: %s\nAddress: %s\nBirth Date: %s\nMembership Expiration Date: %s\nRole: %s\n",
            $this->id,
            $this->firstName,
            $this->lastName,
            $this->email,
            $this->phoneNumber,
            $this->address,
            $this->birthDate,
            $this->membershipExpirationDate,
            $this->role
        );
    }

    public function toHTML(): string {
        return sprintf("
                <p>User: %s %s</p>
                <p>Email: %s</p>
                <p>Phone Number: %s</p>
                <p>Address: %s</p>
                <p>Birth Date: %s</p>
                <p>Membership Expiration Date: %s</p>
                <p>Role: %s</p>",
            $this->firstName,
            $this->lastName,
            $this->email,
            $this->phoneNumber,
            $this->address,
            $this->birthDate,
            $this->membershipExpirationDate,
            $this->role
        );
    }    
    
    public function toMarkdown(): string {
        return "## User: {$this->firstName} {$this->lastName}
                 - Email: {$this->email}
                 - Phone Number: {$this->phoneNumber}
                 - Address: {$this->address}
                 - Birth Date: {$this->birthDate}
                 - Role: {$this->role}";
    }

    public function toArray(): array {
        return [
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'password' => $this->password,
            'phoneNumber' => $this->phoneNumber,
            'address' => $this->address,
            'birthDate' => $this->birthDate,
            'role' => $this->role
        ];
    }
}
?>