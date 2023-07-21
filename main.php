<?php

require_once __DIR__ . '/vendor/autoload.php';

use TestAutoTransportApp\Classes\Driver\AutoDriver;
use TestAutoTransportApp\Classes\Driver\BusDriver;
use TestAutoTransportApp\Classes\Driver\MinibusDriver;
use TestAutoTransportApp\Classes\Driver\MotorbikeDriver;
use TestAutoTransportApp\Classes\Transport\Auto;
use TestAutoTransportApp\Classes\Transport\BaseTransport;
use TestAutoTransportApp\Classes\Transport\Bus;
use TestAutoTransportApp\Classes\Transport\Minibus;
use TestAutoTransportApp\Classes\Transport\Motorbike;

function getTransportItems(): array
{
    $result = [];
    $autoDriver = new AutoDriver();
    $busDriver = new BusDriver();
    $minibusDriver = new MinibusDriver();
    $motorbikeDriver = new MotorbikeDriver();

    $result[] = new Bus($busDriver);
    $result[] = new Auto($autoDriver);
    $result[] = new Minibus($minibusDriver);
    $result[] = new Motorbike($motorbikeDriver);

    return $result;
}

function calculateTravelCost(int $passengers, int $baggage, int $distance): void
{
    /**
     * @var BaseTransport[] $transportItems
     */
    $transportItems = getTransportItems();

    foreach ($transportItems as $transportItem) {
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
}

$passengers = 4;
$baggage = 60;
$distance = 250;

calculateTravelCost($passengers, $baggage, $distance);
