<?php

$array = [];
$array_extend = [1,2,3,4,5,6];



for ($i = 1; $i <= 10; $i++) {
    $array[] = $i;
}
//Array randomizer: It shuffles the array and then it slices a random section of it
shuffle($array);
$arrayRand = array_slice($array,rand(2,4),rand(2,6));

print_r($arrayRand);
echo "<br>";


$intersection = array_intersect($arrayRand, $array_extend);

print_r($intersection);
echo "<br>";
print_r(array_merge($arrayRand, $array_extend));