<?php

class Car
{
    private $model;
    private $brand;
    private $year;
    private $horsePower;

    public function __construct(
        string $model,
        string $brand,
        string $year,
        int    $horsePower = null)
    {
        $this->setModel($model);
        $this->brand = $brand;
        $this->year = $year;
        $this->horsePower = $horsePower;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    private function setModel(string $model): void
    {
        if (strlen($model) < 3) {
           echo "Invalid model";
           exit;
        }
        $this->model = $model;
    }



}
$audi = new Car("Q777", "Audi", "2018-07-11");
print_r($audi);
