<?php

abstract class Vehicle
{
    private $consumption;

    public function getConsumption() : int
    {
        return $this->getConsumption();
    }

    public abstract function charge () : bool; // abstraction

    public abstract function startLights () : bool; // abstraction
}

class Car extends Vehicle
{

    private $leftLight;
    private $rightLight;

    public function charge(): bool
    {
       //
        // implementation(конкретики)
        //
        return true;
    }

    public function startLights(): bool
    {
        $this->leftLight = true;
        $this->rightLight = true;

        return true;
    }
}

class Truck extends Vehicle
{
    private $upperLeft;
    private $lowerLeft;
    private $upperRight;
    private $lowerRight;


    public function charge(): bool
    {
        return false;
    }

    public function startLights(): bool
    {
        $this->lowerLeft = true;
        $this->lowerRight = true;
        $this->upperLeft = true;
        $this->upperRight = true;

        return true;
    }
}



$v = new Car();

function recharge(Vehicle $v)
{
    $v->startLights();
    if ($v->getConsumption() < 500) {
        $v->charge();
    }
}

recharge(new Car());
recharge(new Car());
recharge(new Truck());
recharge($v);


