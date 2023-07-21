<?php

namespace TestAutoTransportApp\Classes\Transport;

use TestAutoTransportApp\Classes\Driver\BusDriver;

class Bus extends BaseTransport
{
    public function __construct(BusDriver $driver)
    {
        $this->driver = $driver;
        $this->name = 'Bus';
        $this->passengersCount = 32;
        $this->maxBaggageWeight = 300;
        $this->fuelConsumptionPer100 = 20;
        $this->maxTravelDistance = 200;
        $this->deprecationFactor = 2;
    }
}
