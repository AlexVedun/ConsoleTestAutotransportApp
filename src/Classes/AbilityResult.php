<?php

namespace TestAutoTransportApp\Classes;

class AbilityResult
{
    private bool $passengersCountCheck;
    private bool $baggageWeightCheck;
    private bool $distanceCheck;

    public function __construct()
    {
        $this->passengersCountCheck = false;
        $this->baggageWeightCheck = false;
        $this->distanceCheck = false;
    }

    public function checkPassengersCount(): void
    {
        $this->passengersCountCheck = true;
    }

    public function checkBaggageWeight(): void
    {
        $this->baggageWeightCheck = true;
    }

    public function checkDistance(): void
    {
        $this->distanceCheck = true;
    }

    public function isAble(): bool
    {
        return $this->passengersCountCheck && $this->baggageWeightCheck && $this->distanceCheck;
    }

    public function getDisabilityReason(): string
    {
        $results = [];

        if (!$this->passengersCountCheck) {
            $results[] = 'Too many passengers';
        }
        if (!$this->baggageWeightCheck) {
            $results[] = 'Baggage is too heavy';
        }
        if (!$this->distanceCheck) {
            $results[] = 'Distance is too long';
        }

        return implode(', ', $results);
    }
}
