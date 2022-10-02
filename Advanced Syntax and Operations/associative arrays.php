<?php
/*
$name = readline();
$phones = [
    'gosho' => '0899-043-234',
    'maria' => '0984-456-431',
];

$phones['pesho'] = '0894-432-432'; // add element in the end of the array

$phones['pesho'] = '123-454-545';

if (key_exists($name, $phones)) {
    echo $phones[$name];
} else {
    echo 'Няма такъв номер';
}
*/

$str = readline();
$occurrences = [];
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if (!key_exists($char, $occurrences)) {
        $occurrences[$char] = 0;
    }
    $occurrences[$char]++;
}
foreach ($occurrences as $char => $count) {
    echo $char . ": " . $count . PHP_EOL;
}