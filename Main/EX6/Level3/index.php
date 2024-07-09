<?php

include_once ("circle.php");
include_once ("rectangle.php");
include_once ("triangle.php");
include_once ("shape.php");

$triangle = new Triangle(10,2);
$rectangle = new Rectangle(10,2);
$cercle = new Circle(5);

echo $triangle ->calculateArea() . "<br>";
echo $rectangle -> calculateArea() . "<br>";
echo $cercle ->calculateArea() . "<br>";