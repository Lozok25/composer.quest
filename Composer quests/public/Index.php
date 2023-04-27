<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Hello;

$talk = new Hello();

echo ($talk->talk());
