<?php
// values
asort();
arsort();
uasort();

// keys
ksort();
krsort();

// the boss - keys + values
uksort();




$cities = ['Zlatograd'=>10, 'Asenovgrad'=>50, 'Pernik'=>40];
uasort($cities, function ($val1, $val2){
    if ($val1>$val2) {
        return 1;
    } else {
        return -1;
    }
});
var_dump($cities);