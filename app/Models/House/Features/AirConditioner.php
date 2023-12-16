<?php

namespace App\Models\House\Features;

class AirConditioner
{
    private int $number;

    /**
     * CPU constructor.
     * @param integer $number
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    /**
     * @return integer
     */
    public function getNumber(): int
    {
        return $this->number;
    }
}
