<?php

namespace App\Models\House\Types;

use App\Models\House\Builders\ModernHouseBuilder;
use App\Models\House\Features\Features;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ModernHouseFactory extends House implements IHouseFactory
{
    public function createHouse(): IHouseBuilder
    {
        $builder = new ModernHouseBuilder();

        // Assume Rooms and Features are properly constructed in the builder
        $rooms = $builder->buildRooms();

        // Create a House instance
        $house = new House($rooms);

        return $house;
    }

}
