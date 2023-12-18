<?php

namespace App\Prototype\Privileges\Types;

interface PrivilegeTypeInterface
{
    public function enable(): bool;
    public function disable(): bool;
}
