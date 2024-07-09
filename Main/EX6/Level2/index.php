<?php

use shape\Rectangle;
use shape\Triangle;

include_once 'rectangle.php';
include_once 'triangle.php';

$triangle = new Triangle(2,5);
$rectangle = new Rectangle(4,5);

echo "L'area del triangle es de " . $triangle->calculateArea()  . "<br>";
echo "L'area del rectangle es de " . $rectangle->calculateArea();