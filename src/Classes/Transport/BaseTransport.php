<?php

namespace TestAutoTransportApp\Classes\Transport;

use TestAutoTransportApp\Classes\AbilityResult;
use TestAutoTransportApp\Classes\Driver\BaseDriver;

abstract class BaseTransport
{
    private const FUEL_COST = 50.0;

    protected string $name;
    protected int $passengersCount;
    protected int $maxBaggageWeight;
    protected float $fuelConsumptionPer100;
    protected int $maxTravelDistance;
    protected float $deprecationFactor;
    protected BaseDriver $driver;
    protected float $fuelCost;

    public function __construct(float $fuelCost = null)
    {
        $this->fuelCost = $fuelCost ?: self::FUEL_COST;
    }

    public function getTravelCost(int $distance): float
    {
        $transportCost = $this->deprecationFactor * $this->getFuelConsumption($distance) * $this->fuelCost;

        return $this->driver->getDriverSalary($distance) + $transportCost;
    }

    public function checkAbility(int $passengers, int $baggage, int $distance): AbilityResult
    {
        $result = new AbilityResult();

        if ($this->passengersCount >= $passengers) {
            $result->checkPassengersCount();
        }
        if ($this->maxBaggageWeight >= $baggage) {
            $result->checkBaggageWeight();
        }
        if ($this->maxTravelDistance >= $distance) {
            $result->checkDistance();
        }

        return $result;
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function getFuelConsumption(int $distance): float
    {
        return $distance * $this->fuelConsumptionPer100 / 100;
    }
}
