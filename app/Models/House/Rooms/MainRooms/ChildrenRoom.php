<?php

namespace App\Models\House\Rooms\MainRooms;

class ChildrenRoom
{

    private int $numberOfRooms;

    /**
     * ChildrenRoom constructor.
     * @param integer $numberOfRooms
     */
    public function __construct(int $numberOfRooms)
    {
        $this->numberOfRooms = $numberOfRooms;
    }

    /**
     * Get the number of children rooms.
     *
     * @return int
     */
    public function getNumber(): int
    {
        return $this->numberOfRooms;
    }
}
