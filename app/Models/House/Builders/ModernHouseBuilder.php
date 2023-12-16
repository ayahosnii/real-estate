<?php

namespace App\Models\House\Builders;

use App\Models\House\Builder;
use App\Models\House\Features\Features;
use App\Models\House\HouseInformation;
use App\Models\House\Rooms\MainRooms\ChildrenRoom;
use App\Models\House\Rooms\MainRooms\LivingRoom;
use App\Models\House\Rooms\Rooms;
use App\Models\House\Types\House;
use App\Models\House\Types\ModernHouseFactory;

class ModernHouseBuilder extends Builder
{
    public function buildRooms(): Rooms
    {
        $childrenRoom = new ChildrenRoom(2);
        $livingRoom = new LivingRoom(1);



        return new Rooms(
            $childrenRoom,
            $livingRoom
        );
    }

    public function buildFeature(): Features
    {
        $hasSwimmingPool = true;
        $hasGarden = true;
        $hasParking = true;

        return new Features($hasSwimmingPool, $hasGarden, $hasParking);
    }

    public function buildHouseInformation(): HouseInformation
    {
        $totalArea = 540.0;
        $contractReady = true;
        $paymentProcess = 'Bank';
        $safety = true;
        $floorNumber = 4;
        $numberOfRooms = 2;


        return new HouseInformation($totalArea, $contractReady, $paymentProcess, $safety, $floorNumber, $numberOfRooms);
    }

    public function getHouse(): House
    {
        $modernHouse = new ModernHouseFactory();
        $modernHouse->setRooms($this->buildRooms());
        $modernHouse->setFeatures($this->buildFeature());
        $modernHouse->setHouseInformation($this->buildHouseInformation());
        return $modernHouse;
    }

}
