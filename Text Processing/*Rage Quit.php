<?php

$str = strtoupper(readline());
$strArr = str_split($str);
$result = '';
$uniqueSymbols = [];
$currStr = '';
$timesRepeat = '';
for ($i=0;$i<count($strArr);$i++) {

    if (!(ord($strArr[$i])>47 && ord($strArr[$i])<58)) { // char
        $currStr.=$strArr[$i];
        if(!key_exists($strArr[$i], $uniqueSymbols)) {
            $uniqueSymbols[$strArr[$i]] = true;
        }

    } else { // digit
        $timesRepeat .= $strArr[$i];
        if (!(isset($strArr[$i + 1]) && ord($strArr[$i + 1]) > 47 && ord($strArr[$i + 1]) < 58) || !isset($strArr[$i + 1])) {
            $result .= str_repeat($currStr, intval($timesRepeat));
            $currStr = '';
            $timesRepeat = '';
        }

    }
    }



echo 'Unique symbols used:'.count($uniqueSymbols).PHP_EOL;
echo $result;

// a3
// aSd2&5s@1