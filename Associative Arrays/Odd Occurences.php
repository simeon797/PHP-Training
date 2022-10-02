<?php


$text = array_map('strtolower', explode(' ', readline()));
$words = [];

foreach ($text as $currentWord) {

    if (key_exists($currentWord, $words)) {
        $words[$currentWord]++;
    } else {
        $words[$currentWord] = 1;
    }
}

foreach ($words as $word => $count) {
    echo ($count%2!=0) ? $word.' ' : '';
}