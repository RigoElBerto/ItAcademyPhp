<?php
use mammals\Cat;
use mammals\Dog;

require_once 'cat.php';
require_once 'dog.php';


$dogo = new Dog("Snoopy");
$car = new Cat("HUH");

echo "Em dic " . $dogo->getNom() ." i faig " . $dogo->MakeSound() . "<br>";
echo "Em dic " . $car->getNom() ." i faig " . $car->MakeSound();
