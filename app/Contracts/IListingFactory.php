<?php

namespace App\Contracts;

interface IListingFactory
{
    public function createListing(): IListing;
}
