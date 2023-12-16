<?php

namespace App\Models\House\Types;

use App\Models\House\Rooms\Rooms;

interface IHouseFactory
{
    public function createHouse(): IHouseBuilder;
}
