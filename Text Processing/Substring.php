<?php

$replacement = readline();
$str = readline();

while(true) {
    $strNew = str_replace($replacement, '', $str);
    if ($str==$strNew) {
        break;
    } else {
        $str = $strNew;
    }


}



echo $str;
/*ice
kicegiciceeb*/
