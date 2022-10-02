<?php
/*
$names = ['Tocko', 'Bocko', 'Rocko'];
$firstName = array_shift($names);

echo $firstName;
*/
/*
$names = ['Tocko', 'Bocko', 'Rocko'];
array_unshift($names, 'Goshko');
var_dump($names);
*/

$names = explode(',', readline());
echo implode(PHP_EOL, $names);
//foreach($names as $index => $name) {
//    echo $index . '- >' . $name . PHP_EOL;
//}