<?php

class Mouse extends Mammal
{
    // const CLASS_NAME = "Mouse";

    public function __construct(string $name, string $type, float $weight, string $livingRegion)
    {
        parent::__construct($name, $type, $weight, $livingRegion);
    }

    public function makeSound(): void
    {
        echo "SQUEEEAAAK!" . PHP_EOL;
    }

    public function eat(Food $food): void
    {

        if ("Vegetable" !== $food->getClassName()) {
            throw new Exception(get_class() . "s are not eating that type of food\n");
        }

        $this->setFoodEaten($food->getQuantity());
    }
}