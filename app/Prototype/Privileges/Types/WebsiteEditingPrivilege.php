<?php

namespace App\Prototype\Privileges\Types;

class WebsiteEditingPrivilege implements PrivilegeTypeInterface
{
    public function enable(): bool
    {
        return true;
    }
    public function disable(): bool
    {
        return true;
    }
}
