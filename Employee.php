<?php
namespace dip_sample;

class Employee
{
    private static $firstName;
    private static $lastName;
    private static $dateOfBirth;
    private static $email;

    function __construct($firstName, $lastName, $dateOfBirth, $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->email = $email;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    public function getEmail()
    {
        return $this->email;
    }
}