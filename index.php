<?php

require __DIR__ . '/classes/Config.php';
require __DIR__ . '/classes/DBSingleton.php';

$data1 = new DBSingleton();
$data2 = new DBSingleton();

var_dump($data1);
var_dump($data2);
