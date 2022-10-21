<?php
require_once "AnimalFactoryInterface.php";
require_once "FoodFactoryInterface.php";
require_once "Animal.php";
require_once "Mammal.php";
require_once "Felime.php";
require_once "AnimalFactory.php";
require_once "FoodFactory.php";
require_once "Cat.php";
require_once "Food.php";
require_once "Meat.php";
require_once "Mouse.php";
require_once "Tiger.php";
require_once "Vegetable.php";
require_once "Zebra.php";

class Main
{
    const INPUT_END_COMMAND = "End";

    public function run() {
        $this->readData();
    }

    private function readData() {
        $input = readline();

        while ($input !== self::INPUT_END_COMMAND) {
            $animalData = explode(" ", $input);
            $animal = AnimalFactory::create($animalData);

            $foodData = explode(" ", readline());
            $foodType = $foodData[0];
            $foodQuantity = intval($foodData[1]);
            $food = FoodFactory::create($foodType, $foodQuantity );

            $animal->makeSound();

            try {
                $animal->eat($food);
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }

            echo $animal;
            $input = readline();
        }
    }
}

$main = new Main();
$main->run();

/*
Zebra Doncho 500 Africa
Vegetable 150
End
*/

/*
Tiger Typcho 167.7 Asia
Vegetable 1
End
*/

/*
Mouse Jerry 0.5 Anywhere
Vegetable 0
End
*/

/*
Cat Gray 1.1 Home Persian
Vegetable 4
End
*/