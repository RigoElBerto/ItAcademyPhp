<?php

$array = [2,4,5,8,10];
$cube = (array_map('cube', $array));


 function cube( $num){
return $num * $num * $num;

}
print_r($cube);