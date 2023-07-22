<?php

namespace TestAutoTransportApp\Classes\Transport;

use TestAutoTransportApp\Classes\Driver\MotorbikeDriver;

class Motorbike extends BaseTransport
{
    public function __construct(MotorbikeDriver $driver, string $name = null, float $fuelCost = null)
    {
        parent::__construct($fuelCost);
        $this->driver = $driver;
        $this->name = $name ?: 'Motorbike';
        $this->passengersCount = 1;
        $this->maxBaggageWeight = 5;
        $this->fuelConsumptionPer100 = 6;
        $this->maxTravelDistance = 300;
        $this->deprecationFactor = 1.3;
    }
}
