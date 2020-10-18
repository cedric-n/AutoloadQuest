<?php

use App\Wcs\Hello;
use HelloWorld\SayHello;

require __DIR__ . '/../vendor/autoload.php';


$presentation = new Hello();
$presentation1 = new SayHello();

echo $presentation->talk() . ' | ' . PHP_EOL;
echo $presentation1->world() . ' | ' . PHP_EOL;
