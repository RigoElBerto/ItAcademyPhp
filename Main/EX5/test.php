<?php

require 'EX5_ex1';
require 'EX5_ex2';


$empleado = new Employee("Albert", 5000);
$empleado2 = new Employee("Marta", 8000);

$triangle = new Triangle(2,5);
$rectangle = new Rectangle(4,5);

echo $empleado->Print() . "<br>";
echo $empleado2->Print() . "<br>";

echo "L'area del triangle es de " . $triangle->calculateArea()  . "<br>";
echo "L'area del rectangle es de " . $rectangle->calculateArea();


