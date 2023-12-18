<?php

namespace App\Models\House\Builders;

use App\Models\House\Builder;
use App\Models\House\Features\Features;
use App\Models\House\HouseInformation;
use App\Models\House\Rooms\MainRooms\BathRoom;
use App\Models\House\Rooms\MainRooms\BedRoom;
use App\Models\House\Rooms\MainRooms\LivingRoom;
use App\Models\House\Rooms\Rooms;
use App\Models\House\Types\House;
use App\Models\House\Types\ModernHouseFactory;
use App\Models\House\Types\VillaFactory;
use App\Traits\SetFeaturesTrait;
use App\Traits\SetHouseInformationTrait;
use App\Traits\SetRoomsTrait;

class VillaBuilder extends Builder
{
    //Set Values
    use SetRoomsTrait;
    use SetFeaturesTrait;
    use SetHouseInformationTrait;

    public function buildRooms(): Rooms
    {
        $bedRoom = new BedRoom($this->numberOfBedRooms, $this->numberOfBeds);
        $bathRoom = new BathRoom($this->numberOfBathRooms);
        $livingRoom = new LivingRoom($this->numberOfLivingRooms);

        return new Rooms(
            $bedRoom,
            $livingRoom,
            $bathRoom,
        );
    }

    public function buildFeature(): Features
    {
        $hasSwimmingPool = $this->hasSwimmingPool;
        $hasGarden = $this->hasGarden;
        $hasParking = $this->hasParking;

        return new Features($hasSwimmingPool, $hasGarden, $hasParking);
    }

    public function buildHouseInformation(): HouseInformation
    {
        $id = $this->id;
        $image = $this->image;
        $price = $this->price;
        $totalArea = $this->totalArea;
        $contractReady = $this->contractReady;
        $paymentProcess = 'Bank';
        $address = 'Mystic Grove Way, Eldertown, CA 67890';
        $type = 'Luxury Villa';
        $safety = true;
        $floorNumber = 4;
        $numberOfRooms = 2;


        return new HouseInformation($id, $image, $price, $totalArea, $contractReady, $paymentProcess, $address, $type, $safety, $floorNumber, $numberOfRooms);
    }

    public function getHouse(): House
    {
        $modernHouse = $this->modernHouseFactory ?: new ModernHouseFactory();
        $modernHouse->setRooms($this->buildRooms());
        $modernHouse->setFeatures($this->buildFeature());
        $modernHouse->setHouseInformation($this->buildHouseInformation());
        return $modernHouse;
    }


}
