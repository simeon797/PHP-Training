<?php
spl_autoload_register(function ($class) {
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});


$vehicles = [];
$factory = new \Factories\VehicleFactory();

for ($i = 0; $i < 2; $i++) {
    list($type, $qty, $consumption) = explode(' ', readline());
    $vehicle = $factory->create($type, $qty, $consumption);
    $vehicles[$type] = $vehicle;
}

$n = readline();

for ($i = 0; $i < $n; $i++) {
    list($action, $type, $param) = explode(" ", readline());
    $vehicle = $vehicles[$type];
    $action = strtolower($action);
    echo $vehicle->$action($param);
}

foreach ($vehicles as $vehicle) {
    echo $vehicle . PHP_EOL;
}

/*
Car 30.4 0.4
Truck 99.34 0.9
5
Drive Car 500
Drive Car 13.5
Refuel Truck 10.300
Drive Truck 56.2
Refuel Car 100.2
*/