<?php


class Car implements InfoDetail
{
    /**
     * @var string Mode type of the car.
     */
    private string $model;
    private string $year;
    private string $brand;
    private int $horsePower;

    public function __construct(string $model, string $brand, string $year, int $horsePower){
        $this->model = $model;
        $this->year = $year;
        $this->brand = $brand;
        $this->horsePower = $horsePower;
    }

//    public function getInfo() :array
//    {
//        return [
//            'Model' => $this->model,
//            'Year' => $this->year,
//            'Brand' => $this->brand,
//            'HorsePower' => $this->horsePower,
//        ];
//    }
//
//    public function printInfo():void
//    {
//        echo '**************************'.PHP_EOL;
//        foreach ($this->getInfo() as $key => $value) {
//            echo "Property: '$key' and value: '$value'".PHP_EOL;
//        }
//    }

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
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getYear(): string
    {
        return $this->year;
    }

    /**
     * @param string $year
     */
    public function setYear(string $year): void
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return int
     */
    public function getHorsePower(): int
    {
        return $this->horsePower;
    }

    /**
     * @param int $horsePower
     */
    public function setHorsePower(int $horsePower): void
    {
        $this->horsePower = $horsePower;
    }

    public function getInfo(): array
        // TODO: Implement getInfo() method.
    {
        return [
            'Model' => $this->model,
            'Year' => $this->year,
            'Brand' => $this->brand,
            'HorsePower' => $this->horsePower,
        ];
    }


    public function printInfo(): void
    {
        echo '**************************'.PHP_EOL;
        foreach ($this->getInfo() as $key => $value) {
            echo "Property: '$key' and value: '$value'".PHP_EOL;
        }
    }
}
$lambo = new Car('Lambo', 'Murcalago', '2020', 100000000);
$data = $lambo->getInfo();
$lambo->printInfo();




//
//$audi = new Car();
//
//$audi->model = "Q7";
//$audi->brand = "Audi";
//$audi->year = "2018-01-07";
//$audi->horsePower = 600;
//
//$audi->model = "trabant R8";
//
//echo $audi->model . PHP_EOL .
//    $audi->brand . PHP_EOL .
//    $audi->year . PHP_EOL .
//    $audi->horsePower . PHP_EOL;
