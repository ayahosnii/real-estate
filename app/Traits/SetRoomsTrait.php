<?php

namespace App\Traits;

use App\Models\House\Types\ModernHouseFactory;

trait SetRoomsTrait
{
    private int $numberOfBedRooms = 0;
    private int $numberOfBeds = 0;
    private int $numberOfLivingRooms = 0;
    private int $numberOfBathRooms = 0;
    private ?ModernHouseFactory $modernHouseFactory = null;

    public function setModernHouseFactory(ModernHouseFactory $modernHouseFactory): void
    {
        $this->modernHouseFactory = $modernHouseFactory;
    }

    // Setter methods for missing properties
    public function setNumberOfBedRooms(int $numberOfBedRooms): void
    {
        $this->numberOfBedRooms = $numberOfBedRooms;
    }
    public function setNumberOfBathRooms(int $numberOfBathRooms): void
    {
        $this->numberOfBathRooms = $numberOfBathRooms;
    }

    public function setNumberOfLivingRooms(int $numberOfLivingRooms): void
    {
        $this->numberOfLivingRooms = $numberOfLivingRooms;
    }

}
