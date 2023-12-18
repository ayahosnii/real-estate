<?php

namespace App\Traits;

use App\Models\House\Types\ModernHouseFactory;

trait SetHouseInformationTrait
{
    private int $id = 0;
    private string $image = 'image.jpg';
    private float $totalArea = 0.0;
    private bool $contractReady = false;
    private string $type;
    private float $price = 0.0;


    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setImage(string $image): void
    {
        $this->image = $image;
    }
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
    public function setTotalArea(float $totalArea): void
    {
        $this->totalArea = $totalArea;
    }

    public function setContractReady(bool $contractReady): void
    {
        $this->contractReady = $contractReady;
    }



}
