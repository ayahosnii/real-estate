<?php

namespace App\Http\Controllers;


use App\Models\House\Builders\ModernHouseBuilder;
use App\Models\House\Types\Director;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function createApartmentListing()
    {
        $modernHouseBuilder = new ModernHouseBuilder();
        $director = new Director($modernHouseBuilder);

        // Build the modern house
        $modernHouse = $director->makeHouse();;

        // Pass data to the view
        return view('apartment_listing', compact('modernHouse'));
    }
}
