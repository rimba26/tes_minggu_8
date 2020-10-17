<?php

require 'vendor/autoload.php';

use tes\Square;
use tes\Triangle;
use tes\Circle;

echo (new Square())->getArea().PHP_EOL;
echo (new Triangle())->getArea().PHP_EOL;
echo (new Circle())->getArea().PHP_EOL;
