<?php

require_once __DIR__ . '/vendor/autoload.php';

use TestAutoTransportApp\Classes\TravelCostCalculator;

$travelCostCalculator = new TravelCostCalculator();

$passengers = 4;
$baggage = 60;
$distance = 175;

$travelCostCalculator->calculateTravelCost($passengers, $baggage, $distance);
