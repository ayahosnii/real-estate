<?php

namespace App\Models\House\Rooms\MainRooms;

class BedRoom
{

    private int $numberOfRooms;
    private int $numberOfBeds;

    /**
     * BedRoom constructor.
     * @param integer $numberOfRooms
     */
    public function __construct(int $numberOfRooms, int $numberOfBeds)
    {
        $this->numberOfRooms = $numberOfRooms;
        $this->numberOfBeds = $numberOfBeds;
    }

    /**
     * Get the number of bed rooms.
     *
     * @return int
     */
    public function getNumber(): int
    {
        return $this->numberOfRooms;
    }

    public function getNumberOfBeds(): int
    {
        return $this->numberOfBeds;
    }
}
