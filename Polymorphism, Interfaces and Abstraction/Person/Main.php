<?php
require_once "Person.php";
require_once "Citizen.php";

class Main
{
    public function run() {
        $this->readData();
    }

    public function readData() {
        $name = readline();
        $age = intval(readline());

        $citizen = new Citizen($name, $age);
        echo $citizen;
    }

}

$main = new Main();
$main->run();