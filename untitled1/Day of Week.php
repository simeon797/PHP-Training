<?php
$day = readline();
$myDate = new DateTime($day);
echo $myDate->format('l');