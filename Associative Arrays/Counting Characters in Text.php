<?php


$text = readline();
$occurences = [];

for ($i=0;$i<strlen($text);$i++) {
    if (isset($occurences[$text[$i]])) {
        $occurences[$text[$i]]++;
    } else {
        $occurences[$text[$i]] = 1;
    }
}

foreach ($occurences as $key => $value) {
    echo "$key -> $value " . PHP_EOL;
}