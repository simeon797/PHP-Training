<?php

namespace Factories;

use Vehicles\VehicleInterface;

interface VehicleFactoryInterface
{
    /**
     * @param string $type
     * @param float $qty
     * @param float $consumption
     * @throws \Exception
     * @return VehicleInterface
     */
    public function create(string $type, float $qty, float $consumption) : VehicleInterface;
}