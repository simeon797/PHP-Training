<?php

$word = "historical-list.jpeg";
$len = strlen($word);
$startPosition = strpos($word, '.');
$word1 = substr($word,$startPosition+1);

echo $word1;

