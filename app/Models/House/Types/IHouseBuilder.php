<?php

namespace App\Models\House\Types;

use App\Models\House\Rooms\Rooms;

interface IHouseBuilder
{
//    public function setRooms(Rooms $rooms): void;
//    public function setFeatures(Features $features): void;
//    public function getDescription(): string;

    public function buildRooms(): Rooms;
//    public function buildFeatures(): Features;
}
