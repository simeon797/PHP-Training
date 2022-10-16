<?php

class Student
{
    public $name = 'Ivan';
    private $egn = '0000';
    private $avgGrade = 2;

    public function __construct($newName = 'Petko')
    {
        $this->name = $newName;
    }

    /**
     * @return string
     */
    public function getEgn(): string
    {
        return $this->egn;
    }

    /**
     * @param string $egn
     */
    public function setEgn(string $egn): void
    {
        if(false) { // checks if EGN is valid
            $this->egn = $egn;
        } else {
            echo 'Invalid EGN'.PHP_EOL;
        }
    }
}

$newStudent = new Student();
$newStudent2 = new Student('Ivo');

$newStudent->setEgn('9307152189');
var_dump($newStudent);