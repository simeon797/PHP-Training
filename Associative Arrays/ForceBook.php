<?php

$commands = readline();
$users = [];

while($commands!=='Lumpawaroo') {
    $newCommands = explode(' | ', $commands);
    if (count($newCommands) > 1) {
        $forceSide = $newCommands[0];
        $forceUser = $newCommands[1];
        if (!isset($users[$forceUser])) {
            $users[$forceUser] = $forceSide;
        }
    } else {
        $newCommands = explode(' -> ', $commands);
        $forceSide = $newCommands[1];
        $forceUser = $newCommands[0];
    }

    if (!isset($users[$forceUser])) {
        $users[$forceUser] = $forceSide;
    } else {
        $users[$forceUser] = $forceSide;

    }
    echo "$forceUser joins the $forceSide side!" . PHP_EOL;





    $commands = readline();

}


// print logic
$sides = [];
foreach ($users as $name=>$side) {
    if (isset($sides[$side])) {
        $sides[$side]++;
    } else {
        $sides[$side] = 1;
    }
}

uksort($sides, function ($key1, $key2) use ($sides) {
    $midRes = $sides[$key2]<=>$sides[$key1];
    if ($midRes==0) {
        return $key1<=>$key2;
    } else {
        return $midRes;
    }
});






var_dump($sides);

/*
Lighter | Royal
Lighter | Royal1111
Darker | DCay
Ivan Ivanov -> Lighter
DCay -> Lighter
Darker | ivo
Darker | pesho
Darker | asd
Arker | ivo1
Arker | pesho1
Arker | asd1
Lumpawaroo
*/