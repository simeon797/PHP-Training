<?php

class Student {
    public $name = 'Ivan';
    private $egn = '0000';
    private $avgGrade = 2;
    public function __construct($newName) {
        $this->name = $newName;
    }
    public function readline() {
        echo 'You are ';
        echo $this->name;
    }
    public function takeExam()
    {
      if(true) {
          $this->avgGrade = 6;
      }
      echo $this->avgGrade;
    }
}

$newStudent = new Student('Vesko');
$newStudent2 = new Student('Ivo');
var_dump($newStudent2->takeExam());