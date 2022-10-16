<?php

$first = readline();
$second = readline();

$start = ord($first);
$end = ord($second);

printRange($start, $end);

function printRange(int $start, int $end)
{
    if ($end < $start) { // $start = 10; $end = 2;
        $temp = $end;   // $temp = 2;
        $end = $start; // $end = 10;
        $start = $temp; // $start = $temp = 2;
    }
    for ($i = $start + 1; $i < $end; $i++) {
        echo chr($i) . " ";
    }
}