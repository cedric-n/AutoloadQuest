<?php

use App\Wcs\Hello;

$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->addPsr4('App\\Wcs\\',__DIR__);


$presentation = new Hello();

echo $presentation->talk();