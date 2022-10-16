<?php

class Student {
    private $name = 'Ivan';
    private $egn = '0000';
    public function __construct($newName) {
        $this->name = $newName;
    }
    public function readline() {
        echo 'You are ';
        echo $this->name;
    }
}

$newStudent = new Student('Vesko');
$newStudent2 = new Student('Ivo');
var_dump($newStudent->readline());
