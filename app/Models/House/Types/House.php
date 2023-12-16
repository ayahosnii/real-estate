<?php

namespace App\Models\House\Types;

use App\Models\House\Features\Features;
use App\Models\House\HouseInformation;
use App\Models\House\Rooms\Rooms;

class House
{
    private Rooms $rooms;
    private Features $features;

    public function setRooms(Rooms $rooms): void
    {
        $this->rooms = $rooms;
    }

    public function getRooms(): Rooms
    {
        return $this->rooms;
    }

    public function setFeatures(Features $features): void
    {
        $this->features = $features;
    }
    public function getFeatures(): Features
    {
        return $this->features;
    }
    public function setHouseInformation(HouseInformation $houseInformation): void
    {
        $this->houseInformation = $houseInformation;
    }
    public function getHouseInformation(): HouseInformation
    {
        return $this->houseInformation;
    }

    public function getDescription(): string
    {
        $description = 'This house has ' . $this->rooms->getChildrenRoom()->getNumber() . ' rooms.'
            . $this->rooms->getChildrenRoom()->getNumberOfBeds() . ' beds.';

        if ($this->features->hasSwimmingPool()) {
            $description .= ' It has a swimming pool.';
        }

        if ($this->features->hasGarden()) {
            $description .= ' It has a garden.';
        }

        return $description;
    }
}
