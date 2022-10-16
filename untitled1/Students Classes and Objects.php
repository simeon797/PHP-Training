<?php

class Student {
    private $firstName;
    private $lastName;
    private $age;
    private $city;

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }




}


$command = readline();
$students = [];

while ($command!=='end') {
    $fields = explode(' ', $command);
    $newStudent = new Student();
    $newStudent->setFirstName($fields[0]);
    $newStudent->setLastName($fields[1]);
    $newStudent->setAge($fields[2]);
    $newStudent->setCity($fields[3]);
    $students[] = $newStudent;

    $command = readline();
}

$city = readline();
foreach ($students as $student) {
    if ($city == $student->getCity()) {
        echo $student->getFirstName().' '.$student->getLastName().' is '.$student->getAge().' years old.'.PHP_EOL;
    }
}


// Todo print