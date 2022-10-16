<?php
$arr = array(
    0 => array('name' => 'Ivan', 'age' => 18),
    1 => array('name' => 'Stoyan', 'age' => 31),
    2 => array('name' => 'Dragan', 'age' => 12),
    3 => array('name' => 'Maria', 'age' => 22),
    4 => array('name' => 'Zoya', 'age' => 15)
);

$arr2 = array(
    0 => array('name' => 'Ivan', 'age' => 18),
    1 => array('name' => 'Stoyan', 'age' => 31),
    2 => array('name' => 'Dragan', 'age' => 12),
    3 => array('name' => 'Maria', 'age' => 22),
    4 => array('name' => 'Zoya', 'age' => 15)
);



$age = array_filter($arr, function ($a) use ($arr2) {
    if (18 <= $a['age']) {
        return $a;
    }
});

print_r($age);
