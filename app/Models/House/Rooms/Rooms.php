<?php

namespace App\Models\House\Rooms;

use App\Models\House\Features\Features;
use App\Models\House\Rooms\MainRooms\BathRoom;
use App\Models\House\Rooms\MainRooms\BedRoom;
use App\Models\House\Rooms\MainRooms\LivingRoom;

class Rooms
{
    private BedRoom $bedRoom;
    private LivingRoom $livingRoom;
    private BathRoom $bathRoom;


    /**
     * Room constructor.
     * @param BedRoom $bedRoom
     * @param LivingRoom $livingRoom
     * @param BathRoom $bathRoom
     */
    public function __construct(BedRoom $bedRoom, LivingRoom $livingRoom, BathRoom $bathRoom)
    {
        $this->bedRoom = $bedRoom;
        $this->livingRoom = $livingRoom;
        $this->bathRoom = $bathRoom;
    }

    public function getbedRoom(): BedRoom
    {
        return $this->bedRoom;
    }

    public function getBathRoom(): BathRoom
    {
        return $this->bathRoom;
    }
    public function getFeatures(): Features
    {
        return $this->features;
    }

    public function getLivingRoom(): LivingRoom
    {
        return $this->livingRoom;
    }
    public function getNumberOfbedRooms(): int
    {
        return $this->bedRoom->getNumber();
    }
    public function getNumberOfLivingRooms(): int
    {
        return $this->livingRoom->getNumber();
    }

}
