<?php

$num = 2;
echo $num . "\n"; // 2
changeValue($num);
echo $num; // 102

function changeValue(int &$arg) {
    $arg += 100;
}

