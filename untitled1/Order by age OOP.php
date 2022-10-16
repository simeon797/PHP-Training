<?php

class Person {
    private string $name;
    private int $id;
    private int $age;

    /**
     * @param $name
     * @param $id
     * @param $age
     */
    public function __construct( string $name, int $id, int $age)
    {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
    }

    public function testFunction() : string {
        $testName = $this->getName().'Simeon';
        $this->setName($testName);
        $var1 = $this->getName();
        $var2 = $this->name;
        return $testName;

    }


    /**
     * @return mixed
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }


}
$people = [];
$input = readline();
while ($input !== "End") {

    $args = explode(" ", $input);
    $name = $args[0];
    $id = $args[1];
    $age= intval($args[2]);
    $person = new Person($name, $id, $age);
    $people [] = $person;


    $input = readline();
}

usort($people, function (Person $p1, Person $p2) use () {
    $age1 = $p1->getAge();
    $age2 = $p2->getAge();
    return $age1 <=> $age2;
} );

foreach ($people as $person) {
    $name = $person->getName();
    $id = $person->getId();
    $age = $person->getAge();
    echo "$name with ID: $id is $age years old.".PHP_EOL;
}
