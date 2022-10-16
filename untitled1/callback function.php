<?php
function my_callback(string $item): int
{
    return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
$a = is_callable('my_call');
echo $a;
print_r($lengths);
// array_map — Applies the callback to the elements of the given arrays
