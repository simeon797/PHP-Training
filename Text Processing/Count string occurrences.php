<?php

$string = readline();
$search = readline();
$count = 0;

$string = str_replace([',','.','?','!',' '], '@', $string);
$arr = explode('@', $string);
foreach ($arr as $word) {
    if ($search==$word){
        $count++;
    }

}

echo $count;

/*This is a word and it also is a sentence.
is
*/
/*How are you?? Good, thanks.
are
*/