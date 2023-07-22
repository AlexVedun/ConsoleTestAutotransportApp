<?php

namespace TestAutoTransportApp\Classes\Driver;

abstract class BaseDriver
{
    private const KILOMETER_RATE = 5.0;
    protected string $category;
    protected float $categoryFactor;
    protected float $kilometerRate;

    public function __construct(float $kilometerRate = null)
    {
        $this->kilometerRate = $kilometerRate ?: self::KILOMETER_RATE;
    }

    public function getDriverSalary(int $distance): float
    {
        return $distance * $this->kilometerRate * $this->categoryFactor;
    }
}
