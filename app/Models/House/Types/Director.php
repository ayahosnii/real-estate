<?php

namespace App\Models\House\Types;

use App\Models\House\Builder;

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
}
