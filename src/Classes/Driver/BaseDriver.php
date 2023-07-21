<?php

namespace TestAutoTransportApp\Classes\Driver;

abstract class BaseDriver
{
    private const KILOMETER_RATE = 5;
    protected string $category;
    protected float $categoryFactor;

    public function getDriverSalary(int $distance): float
    {
        return $distance * self::KILOMETER_RATE * $this->categoryFactor;
    }
}
