<?php

namespace App\Models\House\Rooms\MainParts;

class Bed
{
    private int $numberOfBeds;

    /**
     * Bed constructor.
     * @param integer $numberOfBeds
     */
    public function __construct(int $numberOfBeds)
    {
        $this->numberOfBeds = $numberOfBeds;
    }

    /**
     * Get the number of beds.
     *
     * @return int
     */
    public function getNumberOfBeds(): int
    {
        return $this->numberOfBeds;
    }
}
