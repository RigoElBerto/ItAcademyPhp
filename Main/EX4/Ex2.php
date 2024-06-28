<?php

$x = array (10, 20, 30, 40, 50,60);

echo count($x)  . "<br>";

print_r($x);


unset($x[2]); //elimina l'element en l'index 2
$x= array_values($x); //reindexa el array


echo "<br>" . count($x) . "<br>";
print_r($x);

array_splice($x,2,1); //elimina 1 element a partir del index 2, i automaticament es reindexa
echo "<br>" . count($x) . "<br>";

print_r($x);