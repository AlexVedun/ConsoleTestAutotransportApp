<?php

namespace TestAutoTransportApp\Classes;

use TestAutoTransportApp\Classes\Driver\AutoDriver;
use TestAutoTransportApp\Classes\Driver\BusDriver;
use TestAutoTransportApp\Classes\Driver\MinibusDriver;
use TestAutoTransportApp\Classes\Driver\MotorbikeDriver;
use TestAutoTransportApp\Classes\Transport\Auto;
use TestAutoTransportApp\Classes\Transport\BaseTransport;
use TestAutoTransportApp\Classes\Transport\Bus;
use TestAutoTransportApp\Classes\Transport\Minibus;
use TestAutoTransportApp\Classes\Transport\Motorbike;

class TravelCostCalculator
{
    /**
     * @var BaseTransport[] $transportItems
     */
    private array $transportItems;

    public function __construct()
    {
        $this->transportItems = $this->getTransportItems();
    }

    private function getTransportItems(): array
    {
        $result = [];
        $autoDriver = new AutoDriver();
        $busDriver = new BusDriver();
        $experiencedBusDriver = new BusDriver(8.0);
        $minibusDriver = new MinibusDriver();
        $motorbikeDriver = new MotorbikeDriver();

        $result[] = new Bus($busDriver);
        $result[] = new Bus($experiencedBusDriver, 'Bus with experienced driver');
        $result[] = new Bus($busDriver, 'Bus on cheaper fuel', 35.0);
        $result[] = new Auto($autoDriver);
        $result[] = new Minibus($minibusDriver);
        $result[] = new Motorbike($motorbikeDriver);

        return $result;
    }

    public function calculateTravelCost(int $passengers, int $baggage, int $distance): void
    {
        echo '---------- Begin ----------' . "\n";
        echo 'Request: ' . "\n";
        echo 'Passengers: ' . $passengers . "\n";
        echo 'Baggage: ' . $baggage . "\n";
        echo 'Distance: ' . $distance . "\n";
        echo "\n";
        echo 'Response: ' . "\n";
        echo "\n";

        foreach ($this->transportItems as $transportItem) {
            $ability = $transportItem->checkAbility($passengers, $baggage, $distance);

            echo 'Transport: ' . $transportItem->getName(), "\n";
            echo 'Status: ' . ($ability->isAble() ? 'possible' : 'not possible'), "\n";

            if ($ability->isAble()) {
                echo 'Cost: ' . round($transportItem->getTravelCost($distance), 2) . ' UAH', "\n";
            } else {
                echo 'Reason: ' . $ability->getDisabilityReason(), "\n";
            }

            echo "\n";
        }

        echo '---------- End ----------' . "\n";
        echo "\n";
    }
}
