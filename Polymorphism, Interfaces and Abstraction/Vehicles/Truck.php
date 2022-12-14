<?php

namespace Vehicles;

class Truck extends VehicleAbstract
{
    const FUEL_MODIFIER = 1.6;
    const REFUEL_MODIFIER = 0.95;

    public function __construct(float $fuelQuantity, float $fuelConsumption)
    {
        parent::__construct($fuelQuantity, $fuelConsumption, self::FUEL_MODIFIER);
    }

    public function refuel(float $litres): void
    {
        parent::refuel($litres * self::REFUEL_MODIFIER);
    }

}