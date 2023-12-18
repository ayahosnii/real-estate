<?php

namespace App\Prototype;

use App\Prototype\Privileges\Privileges;

class EmployeePrototype implements IPrototype
{
    private ProfileData $profileData;
    private Salary $salary;
    private Privileges $privileges;

    /**
     * @param ProfileData $profileData
     * @param Salary $salary
     * @param Privileges $privileges
     */
    public function __construct(ProfileData $profileData, Salary $salary, Privileges $privileges)
    {
        $this->profileData = $profileData;
        $this->salary = $salary;
        $this->privileges = $privileges;
    }

    public function clone()
    {
        // TODO: Implement clone() method.
    }


}
