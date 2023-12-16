<?php

namespace App\Models\House\Features;

class Features
{
    private bool $hasSwimmingPool;
    private bool $hasGarden;
    private bool $hasParking;

    public function __construct(bool $hasSwimmingPool = false, bool $hasGarden = false,  bool $hasParking)
    {
        $this->hasSwimmingPool = $hasSwimmingPool;
        $this->hasGarden = $hasGarden;
        $this->hasParking = $hasParking;
    }

    public function hasSwimmingPool(): bool
    {
        return $this->hasSwimmingPool;
    }

    public function hasGarden(): bool
    {
        return $this->hasGarden;
    }
    public function hasParking(): bool
    {
        return $this->hasParking;
    }
}
