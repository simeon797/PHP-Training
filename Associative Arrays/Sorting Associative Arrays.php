<?php

$cities = ['Zlatograd'=>10, 'Asenovgrad'=>50, 'Pernik'=>40];
uksort($cities, function ($k1, $k2){
    if ($k1 == 'Pernik') {
        return -1;
    } else {
        return 1;
    }
});
var_dump($cities);