<?php

namespace App\Models\House;

use App\Models\House\Features\Features;
use App\Models\House\Rooms\Rooms;
use App\Models\House\Types\House;

abstract class Builder
{
    protected House $house;

    abstract protected function buildRooms(): Rooms;
    abstract protected function buildFeature(): Features;
    abstract protected function buildHouseInformation(): HouseInformation;

    abstract protected function getHouse(): House;

}
