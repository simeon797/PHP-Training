<?php

$word = readline();
$case = readline();
$sumLower = 0;
$sumUpper = 0;

for ($i = 0; $i < strlen($word); $i++) {
    $current = $word[$i];

    if (ctype_lower($current)){
            $sumLower += ord($current);
    } else if (ctype_upper($current)) {
            $sumUpper += ord($current);
        }

}

if ($case==="LOWERCASE") {
    echo "The total sum is: $sumLower ";
} else {
    echo "The total sum is: $sumUpper ";
}

//HelloFromMyAwesomePROGRAM
//LOWERCASE

