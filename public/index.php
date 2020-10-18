<?php

use App\Wcs\Hello;
$loader = require __DIR__ . '/../vendor/autoload.php';


$presentation = new Hello();

echo $presentation->talk();