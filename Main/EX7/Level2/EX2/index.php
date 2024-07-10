<?php

include 'car.php';


$coche = new Car("Citroen", '2534-EYY',"Benzina" , 150);

echo $coche->boost();