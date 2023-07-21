<?php

namespace Classes\Driver;

use PHPUnit\Framework\TestCase;
use TestAutoTransportApp\Classes\Driver\BusDriver;

class BaseDriverTest extends TestCase
{

    public function testGetDriverSalary()
    {
        $driver = new BusDriver();

        $result = $driver->getDriverSalary(0);
        $this->assertSame(0.0, $result);

        $result = $driver->getDriverSalary(1);
        $this->assertSame(15.0, $result);
    }
}
