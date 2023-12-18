<?php

namespace App\Models\House;

use App\Models\House\Types\House;
use App\Models\House\Types\ModernHouseFactory;
use App\Models\ModernHouse;

class Director
{
    protected Builder $builder;

    /**
     * Director constructor.
     * @param Builder $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function changeBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function makeHouse(): House
    {
        return $this->builder->getHouse();
    }
    public function storeHouse()
    {
        $modernModel =  new ModernHouse();
        $modernModel->makeHouse();
        $modernModel->save();
        return $modernModel;
    }
}
