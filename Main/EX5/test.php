<?php

use shape\Rectangle;
use shape\Triangle;

require 'EX5_ex1.php';
include_once 'rectangle.php';
include_once 'triangle.php';


$empleado = new Employee("Albert", 5000);
$empleado2 = new Employee("Marta", 8000);

$triangle = new Triangle(2,5);
$rectangle = new Rectangle(4,5);

echo $empleado->Print() . "<br>";
echo $empleado2->Print() . "<br>";

echo "L'area del triangle es de " . $triangle->calculateArea()  . "<br>";
echo "L'area del rectangle es de " . $rectangle->calculateArea();


