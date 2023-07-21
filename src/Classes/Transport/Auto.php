<?php

namespace TestAutoTransportApp\Classes\Transport;

use TestAutoTransportApp\Classes\Driver\AutoDriver;

class Auto extends BaseTransport
{
    public function __construct(AutoDriver $driver)
    {
        $this->driver = $driver;
        $this->name = 'Auto';
        $this->passengersCount = 4;
        $this->maxBaggageWeight = 50;
        $this->fuelConsumptionPer100 = 8;
        $this->maxTravelDistance = 500;
        $this->deprecationFactor = 1.5;
    }
}
