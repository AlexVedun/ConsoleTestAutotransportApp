<?php

namespace TestAutoTransportApp\Classes\Transport;

use TestAutoTransportApp\Classes\Driver\MinibusDriver;

class Minibus extends BaseTransport
{
    public function __construct(MinibusDriver $driver)
    {
        $this->driver = $driver;
        $this->name = 'Minibus';
        $this->passengersCount = 10;
        $this->maxBaggageWeight = 150;
        $this->fuelConsumptionPer100 = 15;
        $this->maxTravelDistance = 300;
        $this->deprecationFactor = 2;
    }
}
