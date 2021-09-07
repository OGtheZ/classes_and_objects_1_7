<?php

$surveyed = 12467;
$purchasedEnergyDrinks = 0.14;
$preferCitrusDrinks = 0.64;

function calculateEnergyDrinkers(int $surveyed, float $purchasedEnergyDrinks): int
{
    return $surveyed * $purchasedEnergyDrinks;
}

function calculatePreferCitrus(int $surveyed, float $preferCitrusDrinks): int
{
    return $surveyed * $preferCitrusDrinks;
}

$citrusDrinkers = calculatePreferCitrus($surveyed, $preferCitrusDrinks);
$sugarRushers = calculateEnergyDrinkers($surveyed, $purchasedEnergyDrinks);

echo "Total number of people surveyed " . $surveyed . PHP_EOL;
echo "Approximately " . $sugarRushers . " bought at least one energy drink" . PHP_EOL;
echo $citrusDrinkers . " of those " . "prefer citrus flavored energy drinks." . PHP_EOL;