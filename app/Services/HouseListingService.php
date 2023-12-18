<?php

namespace App\Services;

use App\Models\House\Director;
use App\Models\House\Types\House;

class HouseListingService
{
    public function createHouseListing(Director $director): House
    {
        return $director->makeHouse();
    }
}
