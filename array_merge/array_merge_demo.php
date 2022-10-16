<?php



$names = [
    'nikolay' => 27,
    'simeon' => 29,
    'misho' => 24,
    'ivan' => 5,
];

$names += [
    'ivan' => 20,
    'misho'=> 55,
    'penka' => 44,
];
//  this syntax does not override the existing elements in the array.
// In order to override the existing elements if you want to merge array you have to use array_merge().
//  Array merge will override the existing elements and add/append the new ones.
//$result = array_merge($names,[
//    'ivan' => 15,
//    'misho'=> 22,
//    'alex' => 19
//]);
//print_r($result);


