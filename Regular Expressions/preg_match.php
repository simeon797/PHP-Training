<?php

$string = 'I am born on 30-Dec-1994.
My father is born on the 9-Jul-0000. 9-Jul-2555
01-July-2000 is not a valid date. ';

$regex = '/(?:\s)(?<day>[1-3]?[\d])-(?<month>[A-Z]{1}[a-z]{2})-(?<year>[12]\d{3})/';
$matches = [];
//var_dump(preg_match_all($regex, $string, $matches));
//var_dump($matches);
$matches = preg_split($regex, $string, $matches);
$a = 5;
// array_filter
// Advanced Syntax and Operations and git github