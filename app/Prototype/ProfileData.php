<?php

namespace App\Prototype;


class ProfileData
{
    private string $name = 'Employee Name';
    private int $age;
    private ?Address $address;
    private string $telephoneNumber;
    private string $mobileNumber;
    private string $slackAccountName;

    /**
     * @param string $name
     * @param int $age
     * @param Address|null $address
     * @param string $telephoneNumber
     * @param string $mobileNumber
     * @param string $slackAccountName
     */
    public function __construct(string $name, int $age, ?Address $address, string $telephoneNumber, string $mobileNumber, string $slackAccountName, ?Salary $salary,)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->telephoneNumber = $telephoneNumber;
        $this->mobileNumber = $mobileNumber;
        $this->slackAccountName = $slackAccountName;
    }


}
