<?php

namespace App\Models\House;


class HouseInformation
{
    private float $totalArea;
    private bool $contractReady;
    private string $paymentProcess;
    private bool $safety;

    public function __construct(float $totalArea, bool $contractReady, string $paymentProcess,
                                bool $safety, int $floorNumber, int $numberOfRooms)
    {
        $this->totalArea = $totalArea;
        $this->contractReady = $contractReady;
        $this->safety = $safety;

        $this->floorNumber = $floorNumber;
        $this->numberOfRooms = $numberOfRooms;
        $this->paymentProcess = $paymentProcess;
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

    public function isUnderControl24x7(): bool
    {
        return $this->safety;
    }
}

