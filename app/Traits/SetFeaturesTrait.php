<?php

namespace App\Traits;

use App\Models\House\Types\ModernHouseFactory;

trait SetFeaturesTrait
{
    private bool $hasSwimmingPool = false;
    private bool $hasGarden = false;
    private bool $hasParking = false;


    // Setter methods for missing properties
    public function setHasSwimmingPool(bool $hasSwimmingPool): void
    {
        $this->hasSwimmingPool = $hasSwimmingPool;
    }

    public function setHasGarden(bool $hasGarden): void
    {
        $this->hasGarden = $hasGarden;
    }

    public function setHasParking(bool $hasParking): void
    {
        $this->hasParking = $hasParking;
    }

}
