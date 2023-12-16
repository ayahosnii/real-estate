<?php

namespace App\Models\House\Rooms;

use App\Models\House\Rooms\MainRooms\ChildrenRoom;
use App\Models\House\Rooms\MainRooms\LivingRoom;

class Rooms
{
    private ChildrenRoom $childrenRoom;
    private LivingRoom $livingRoom;


    /**
     * Room constructor.
     * @param ChildrenRoom $childrenRoom
     * @param LivingRoom $livingRoom
     */
    public function __construct(ChildrenRoom $childrenRoom, LivingRoom $livingRoom)
    {
        $this->childrenRoom = $childrenRoom;
        $this->livingRoom = $livingRoom;
    }

    public function getChildrenRoom(): ChildrenRoom
    {
        return $this->childrenRoom;
    }

    public function getLivingRoom(): LivingRoom
    {
        return $this->livingRoom;
    }
    public function getNumberOfChildrenRooms(): int
    {
        return $this->childrenRoom->getNumber();
    }
    public function getNumberOfLivingRooms(): int
    {
        return $this->livingRoom->getNumber();
    }

}
