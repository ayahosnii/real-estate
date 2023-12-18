<?php

namespace App\Models\House\Rooms\MainRooms;

class BathRoom
{

    private int $numberOfRooms;

    /**
     * BedRoom constructor.
     * @param integer $numberOfRooms
     */
    public function __construct(int $numberOfRooms)
    {
        $this->numberOfRooms = $numberOfRooms;
    }

    /**
     * Get the number of bathrooms.
     *
     * @return int
     */
    public function getNumber(): int
    {
        return $this->numberOfRooms;
    }

}
