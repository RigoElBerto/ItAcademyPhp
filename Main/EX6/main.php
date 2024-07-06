<?php

require 'animal.php';
require 'cat.php';
require 'dog.php';


$dogo = new Dog("Snoopy");
$car = new Cat("HUH");

echo "Em dic " . $dogo->getNom() ." i faig " . $dogo->MakeSound() . "<br>";
echo "Em dic " . $car->getNom() ." i faig " . $car->MakeSound();
