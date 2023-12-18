<?php

namespace App\Prototype\Privileges;

use App\Prototype\Privileges\Types\PrivilegeTypeInterface;

class Privileges
{
    private array $privilege;

    /**
     * @param array $privilege
     */
    public function __construct(array $privilege)
    {
        $this->privilege = $privilege;
    }

    public function addPrivilege(PrivilegeTypeInterface $privilege)
    {
        array_push($this->privileges, $privilege);
    }

    public function clearPrivileges()
    {
        $this->privileges = [];
    }

}
