<?php

namespace TestAutoTransportApp\Classes\Transport;

use TestAutoTransportApp\Classes\Driver\MinibusDriver;

class Minibus extends BaseTransport
{
    public function __construct(MinibusDriver $driver, string $name = null, float $fuelCost = null)
    {
        parent::__construct($fuelCost);
        $this->driver = $driver;
        $this->name = $name ?: 'Minibus';
        $this->passengersCount = 10;
        $this->maxBaggageWeight = 150;
        $this->fuelConsumptionPer100 = 15;
        $this->maxTravelDistance = 300;
        $this->deprecationFactor = 2;
    }
}
