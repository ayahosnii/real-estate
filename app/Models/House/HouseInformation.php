<?php

namespace App\Models\House;


class HouseInformation
{
    private int $id;
    private string $image;
    private string $type;
    private float $price;
    private float $totalArea;
    private bool $contractReady;
    private string $paymentProcess;
    private bool $safety;

    public function __construct(int $id, string $image, float $price, float $totalArea, bool $contractReady, string $paymentProcess,
                                string $address, string $type,
                                bool $safety, int $floorNumber, int $numberOfRooms)
    {
        $this->id = $id;
        $this->image = $image;
        $this->price = $price;
        $this->totalArea = $totalArea;
        $this->contractReady = $contractReady;
        $this->safety = $safety;
        $this->type = $type;

        $this->floorNumber = $floorNumber;
        $this->numberOfRooms = $numberOfRooms;
        $this->paymentProcess = $paymentProcess;
        $this->address = $address;
    }

    public function getId(): string
    {
        return $this->id;
    }
    public function getImage(): string
    {
        return $this->image;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
    public function getTotalArea(): float
    {
        return $this->totalArea;
    }

    public function isContractReady(): bool
    {
        return $this->contractReady;
    }

    public function getPaymentProcess(): string
    {
        return $this->paymentProcess;
    }
    public function getAddress(): string
    {
        return $this->address;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function isUnderControl24x7(): bool
    {
        return $this->safety;
    }
}

