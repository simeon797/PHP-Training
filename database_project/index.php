<?php

use database\DataBaseIndex;

require_once 'autoLoader.php';


$con = DataBaseIndex::getInstance();

$con->createTable('Example');
//print_r($con->showTables());
//$con->deleteTable('Example');
//$con->insertRecord(1);
//$con->deleteRecord(1);


// var_dump($con);