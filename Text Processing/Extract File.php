<?php

$fullName = readline();

$lastSlash = strrpos($fullName, "\\");
$file = substr($fullName, $lastSlash+1);
$lastDot = strrpos($file, ".");
$extension = substr($file, $lastDot+1);
$fileName = substr($file, 0,$lastDot);


echo "File name: $fileName" . PHP_EOL;
echo "File extension: $extension" . PHP_EOL;

// C:\Internal\training-internal\Template.pptx