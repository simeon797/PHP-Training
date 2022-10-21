<?php

require_once "CatFactoryInterface.php";
require_once "Cat.php";
require_once "CatFactory.php";
require_once "Cymric.php";
require_once "Siamese.php";
require_once "StreetExtraordinare.php";

class Main
{
    const PATTERN = "/\\s+/";
    const INPUT_END_COMMAND = "End";
    /**
     * @var array
     */
    private $cats;

    public function run() {
        $this->readData();
    }

    private function findCatByName(string $name) : Cat
    {
        if (array_key_exists($name, $this->cats)) {
            return $this->cats[$name];
        }
        return 'null';
}

    private function readData() {
        $input = readline();

        while ($input !== self::INPUT_END_COMMAND) {
            $data = preg_split(self::PATTERN, $input, -1, PREG_SPLIT_NO_EMPTY);

            $breed = $data[0];
            $name = $data[1];
            $param = intval($data[2]);

            $cat = null;
            try {
                $this->cats[$name] = CatFactory::create($breed, $name, $param);
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }

            $input = readline();
        }

        $searchingName = readline();
        $cat = $this->findCatByName($searchingName);
        echo $cat;
    }
}

$main = new Main();
$main->run();

/*
StreetExtraordinaire Maca 85
Siamese Sim 4
Cymric Tom 28
End
Tom
*/