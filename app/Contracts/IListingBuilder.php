<?php

namespace App\Contracts;

interface IListingBuilder
{
    public function buildBasicInfo();
    public function buildLocation();
    public function getResult(): IListing;
}
