<?php

/* $name = 'Ivan Georgiev Stoev';

$nameNew = str_replace('Georgievasdads', 'Ivanov', $name);

var_dump($nameNew); */

$name = '   Ivan Georgiev Stoev    ';
$arrFromString = str_split($name);

$name = ltrim($name);

var_dump($name);