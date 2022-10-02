<?php

/*
%George%<Croissant>|2|10.3$
%Peter%<Gum>|1|1.3$
    End of shift
    */

$input = readline();

while($input!=='End of shift') {
    $person = [];
    preg_match('/(?<=%)[A-Z]{1}[a-z]+(?=%)/', $input, $person);
    $client = $person[0];

    $product = [];
    preg_match('/<\w+>/', $input, $product);
    $productFinal = str_replace(['<', '>'], '', $product[0]);

    $price = [];
    preg_match('/[\d,.-]+(?=\$)/', $input, $price); // '/\|\d{1}\|/'
    $priceFinal = $price[0];

    $quantity = [];
    preg_match('/\|\d{1}\|/', $input, $quantity);
    $quantityFinal = str_replace(['|', '|'], '', $quantity[0]);


    echo $client.' : '.$productFinal. ' - '.$quantityFinal*$priceFinal.PHP_EOL;
    $input = readline();
}