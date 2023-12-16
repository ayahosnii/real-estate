<?php

namespace App\Models\House\Builders;

use App\Models\House\Builder;
use App\Models\House\Rooms\MainRooms\ChildrenRoom;
use App\Models\House\Rooms\MainRooms\LivingRoom;
use App\Models\House\Rooms\Rooms;

class StandardHouseBuilder extends Builder
{
    public function buildRooms(): Rooms
    {
        $childrenRoom = new ChildrenRoom(1);
        $livingRoom = new LivingRoom(0);



        return new Rooms(
            $childrenRoom,
            $livingRoom
        );
    }
}
