<?php

namespace Classes\Transport;

use TestAutoTransportApp\Classes\Driver\BusDriver;
use TestAutoTransportApp\Classes\Driver\MotorbikeDriver;
use PHPUnit\Framework\TestCase;
use TestAutoTransportApp\Classes\Transport\Bus;
use TestAutoTransportApp\Classes\Transport\Motorbike;

class BaseTransportTest extends TestCase
{

    public function testCheckAbility()
    {
        $driver = new MotorbikeDriver();
        $motorbike = new Motorbike($driver);

        $result = $motorbike->checkAbility(1, 1, 1);
        $this->assertSame(true, $result->isAble());

        $result = $motorbike->checkAbility(2, 1, 1);
        $this->assertSame(false, $result->isAble());
    }

    public function testGetName()
    {
        $driver = new BusDriver();
        $bus = new Bus($driver);

        $this->assertSame('Bus', $bus->getName());
    }

    public function testGetTravelCost()
    {
        $driver = new MotorbikeDriver();
        $motorbike = new Motorbike($driver);

        $result = $motorbike->getTravelCost(0);
        $this->assertSame(0.0, $result);

        $result = $motorbike->getTravelCost(1);
        $this->assertSame(9.4, $result);
    }
}
