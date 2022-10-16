<?php

class Car {
    public string $model;
    public string $brand;
    public string $year;
    public int $horsePower;
}

$audi = new Car();

$audi->model = "Q7";
$audi->brand = "Audi";
$audi->year = "2018-01-07";
$audi->horsePower = 600;

$audi->model = "trabant R8";

echo $audi->model . PHP_EOL .
    $audi->brand . PHP_EOL .
    $audi->year . PHP_EOL .
    $audi->horsePower . PHP_EOL;
