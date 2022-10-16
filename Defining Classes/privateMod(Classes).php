<?php

class Car {
    private $model;
    private $brand;
    private $year;
    private $horsePower;

    public function getModel()
    {
        return $this->model;
    }
       public function setModel(string $model) {
            $this->model = $model;
        }
}

$audi = new Car();
$audi->setModel("Q7");

echo $audi->getModel();