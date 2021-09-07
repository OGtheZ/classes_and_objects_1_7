<?php

//is able to -- or ++ the amount of liters by 1 liter, maximum 70l. is able to burn fuel only if fuel > 0!
class fuelGauge
{
    private int $litersOfFuel;

    public function __construct(int $litersOfFuel)
    {
        $this->litersOfFuel = $litersOfFuel;
    }

    public function getLitersOfFuel(): int
    {
        return $this->litersOfFuel;
    }

    public function addFuel($litersOfFuel): void
    {
        if ($this->litersOfFuel < 70){
            $this->litersOfFuel++;
        } else {
            echo "OVERFLOW! " . PHP_EOL;
        }
    }

    public function useFuel($litersOfFuel): void
    {
        if ($this->litersOfFuel > 0) {
            $this->litersOfFuel--;
        } else {
            echo "Not enough fuel!" . PHP_EOL;
        }
    }
}

class odometer
{
    private int $mileage;
    private fuelGauge $litersOfFuel;
    private int $distanceTraveled = 0;

    public function __construct(int $mileage, fuelGauge $litersOfFuel)
    {
        $this->mileage = $mileage;
        $this->litersOfFuel = $litersOfFuel;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }

    public function travelAKilometer(int $mileage,$litersOfFuel): void
    {
        $this->distanceTraveled++;
        if ($this->mileage === 999999)
        {
            $this->mileage = 0;
        } else {
            $this->mileage++;
        }

        if ($this->distanceTraveled % 10 === 0) {
            $this->litersOfFuel->useFuel($litersOfFuel);
        }
    }
}

$carsFuel = new fuelGauge(70);

$carsOdometer = new odometer(100, $carsFuel);

while($carsFuel->getLitersOfFuel() > 0)
{
    $carsOdometer->travelAKilometer($carsOdometer->getMileage(), $carsFuel);
    echo "KM: {$carsOdometer->getMileage()}" . PHP_EOL;
    echo "Fuel left: {$carsFuel->getLitersOfFuel()}" . PHP_EOL;
    echo "____________________________" . PHP_EOL;
}