<?php

class Vehicle
{
    private $leftLight;
    private $rightLight;

    private $name;


    public function __construct(string $name)
    {
        $this->name = $name;
        $this->leftLight = false;
        $this->rightLight = false;
    }

    public function toggleLights() : void
    {
        $this->leftLight = !$this->leftLight;
        $this->rightLight = !$this->rightLight;
    }

    public function lightsEnabled() : bool
    {
        return $this->rightLight && $this->leftLight;
    }

    public function getName() : string
    {
        return $this->name;
    }

}

class Car extends Vehicle
{

}
class Bus extends Vehicle
{
    public function getPeople() : int
    {
        return 12;
    }

}
class Truck extends Vehicle
{
    private $upperLight;
    private $lowerLight;


    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->upperLight = false;
        $this->lowerLight = false;
    }

    public function toggleLights(): void
    {
        parent::toggleLights();
        $this->upperLight = !$this->upperLight;
        $this->lowerLight = !$this->lowerLight;
    }

    public function lightsEnabled(): bool
    {
        return parent::lightsEnabled() && $this->upperLight && $this->lowerLight;
    }

    public function getFuelConsumption()
    {
        return 300;
    }
}

$v1 = new Car("Car1");
$v2 = new Car("Car2");
$v3 = new Bus("Bus1");
$v4 = new Car("Car3");
$v5 = new Truck("Truck1");
$v6 = new Truck("Truck2");
$v7 = new Bus("Bus2");

/** @var Vehicle[] $vehicles */
$vehicles = [$v1, $v2, $v3, $v4, $v5, $v6, $v7,];

foreach ($vehicles as $vehicle) {
    for ($i = 0; $i < rand(3, 10); $i++) {
        $vehicle->toggleLights();
    }
    if ($vehicle->lightsEnabled()) {
        echo "Лампата свети" . PHP_EOL;
    }

    echo $vehicle->getName() . PHP_EOL;
    echo "------------" . PHP_EOL;
}