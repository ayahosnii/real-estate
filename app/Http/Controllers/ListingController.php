<?php

namespace App\Http\Controllers;


use App\Models\House\Builders\ModernHouseBuilder;
use App\Models\House\Builders\PenthouseBuilder;
use App\Models\House\Builders\VillaBuilder;
use App\Models\House\Director;
use App\Prototype\Address;
use App\Prototype\EmployeePrototype;
use App\Prototype\ProfileData;
use App\Prototype\Salary;
use App\Services\HouseListingService;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    public function createApartmentListing()
    {
        $modernHouseBuilder = new ModernHouseBuilder();
        $modernHouses1 = [
            $this->createModernHouse($modernHouseBuilder, 1, 'property-04.jpg', 2.264, 160, 2, 1, 2, 1, 1),
            $this->createModernHouse($modernHouseBuilder, 2, 'property-06.jpg', 2.264, 180, 3, 1, 1, 1, 1),
        ];

        $villa = new VillaBuilder();
        $villa = [
            $this->createModernHouse($villa, 3, 'property-01.jpg', 2.264, 160, 2, 2, 1, 2, 1, 1),
            $this->createModernHouse($villa, 4, 'property-02.jpg', 2.264,  180, 3, 1, 1, 1, 1),
            $this->createModernHouse($villa, 5, 'property-03.jpg', 2.264,  180, 3, 1, 1, 1, 1),
        ];

        $penthouse = new PenthouseBuilder();
        $penthouse = [
            $this->createModernHouse($penthouse, 6, 'property-05.jpg', 2.264, 160, 2, 2, 1, 2, 1, 1),
        ];

        // Merge the two arrays into one
        $modernHouses = array_merge($modernHouses1, $villa, $penthouse);

        // Pass data to the view
        return view('welcome', compact('modernHouses'));
    }


    private function createModernHouse($modernHouseBuilder, $id, $image, $price, $totalArea, $numberOfBedRooms, $numberOfLivingRooms, $numberOfBathRooms, $hasParking1, $hasParking2)
    {
        $modernHouseBuilder->setId($id);
        $modernHouseBuilder->setImage($image);
        $modernHouseBuilder->setPrice($price);
        $modernHouseBuilder->setTotalArea($totalArea);
        $modernHouseBuilder->setNumberOfBedRooms($numberOfBedRooms);
        $modernHouseBuilder->setNumberOfLivingRooms($numberOfLivingRooms);
        $modernHouseBuilder->setNumberOfBathRooms($numberOfBathRooms);
        $modernHouseBuilder->setHasParking($hasParking1);
        $modernHouseBuilder->setHasParking($hasParking2);

        $director = new Director($modernHouseBuilder);
        return $director->makeHouse();
    }

    public function modernHouse3($modernHouseBuilder)
    {
        $modernHouseBuilder->setTotalArea(180);
        $modernHouseBuilder->setNumberOfBedRooms(3);
        $modernHouseBuilder->setNumberOfLivingRooms(1);
        $modernHouseBuilder->setNumberOfBathRooms(1);
        $modernHouseBuilder->setHasParking(1);
        $modernHouseBuilder->setHasParking(1);
    }
    public function modernHouse4($houseListingService)
    {
        return $houseListingService->createHouseListing(new Director(new ModernHouseBuilder()));
    }

    public function employee()
    {
        $employee = new ProfileData(
            name: 'Magd',
            age: 26,
            address: new Address(
                longitude: 51.876656,
                latitude: 54.865655,
                streetName: 'Al Azhar',
                city: 'Cairo',
                country: 'Egypt',
                buildingNumber: 44,
                zipCode: 435654
            ),

            salary: new Salary(
                salary: 2000,
                tax: 0.3,
                medicalInsurance: 23
            ),
        );
    }
}
