<?php

$commandsLimit = intval(readline());
$guests = [];
for ($i = 0; $i < $commandsLimit; $i++) {
    $command = readline();
    $commands = explode(' is ', $command);
   $name = $commands[0];
   $action = $commands[1];

   if ($action=='going!') {
       if (in_array($name, $guests)) {
        echo "$name is already in the list!".PHP_EOL;
       } else {
           $guests[] = $name;
       }
   } else {
       $index = array_search($name, $guests);
       if($index!==false){
            array_splice($guests, $index, 1);
       } else {
           echo "$name is not in the list!".PHP_EOL;
       }

   }
}

echo implode(PHP_EOL, $guests);

