<?php

$cities = explode(', ', readline());
$totalIncomes = [];

for ($i = 0; $i < count($cities); $i+=2) {
    if (intval($cities[$i])==0) { // city
        $income = $cities[$i+1];
        if (key_exists($cities[$i],$totalIncomes)) {
            $totalIncomes[$cities[$i]]+=$income;
        } else {
            $totalIncomes[$cities[$i]] = $income;
        }
    }
}

// output
foreach ($totalIncomes as $city=>$income) {
    echo $city.' => '.$income.PHP_EOL;
}



