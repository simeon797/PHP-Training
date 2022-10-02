<?php


$text1 = 'HowAreYou';
var_dump(preg_split('/(?=[A-Z])/', $text1));
exit();


/*$text = 'How are you??   Good,!!! thanks.
are';
var_dump(preg_split('/[\s!?\.,]/', $text));
exit();*/



/*$string = 'I am born on 30-Dec-1994.
My father is born on the 9-Jul-0000. 9-Jul-2555
01-July-2000 is not a valid date. ';

$regex = '/(?:\s)(?<day>[1-3]?[\d])-(?<month>[A-Z]{1}[a-z]{2})-(?<year>[12]\d{3})/';
$matches = [];
var_dump(preg_split($regex, $string));
var_dump($matches);*/