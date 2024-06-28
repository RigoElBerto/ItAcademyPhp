<?php

$X = array (10, 20, 30, 40, 50,60);

echo count($X);

unset($X[2]); //elimina l'element en l'index 2
$x= array_values($X); //reindexa el array


echo "<br>" . count($X);

array_splice($X,2,1); //elimina 1 element a partir del index 2, i automaticament es reindexa
echo "<br>" . count($X);
