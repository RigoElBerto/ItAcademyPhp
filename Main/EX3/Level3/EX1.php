<?php

$num = 10000;
$array = [];

calculateErastotenes($num);

//es podria fer amb un range, que demana per parametres valor inicial i final i ja et crea l'array
function calculateErastotenes(int $num){
    for ($i = 2; $i <= $num; $i++) {

        $array[]=$i;
    }
    
        /* he hecho $j = $i + 1 porque sino el primer numero del array se descarta a si mismo, al no tener residuo consigo mismo. Hay otras formas de hacerlo
        (enriqueciendo la condición con && $j != $i, eliminando los primeros elementos del array una vez usados u haciendo el residuo siempre de $array[0]...),
        pero esta ha sido la que mas facil de integrar con el codigo que tenia)*/
    
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] % $array[$i] == 0){
                unset($array[$j]);
            }
            $array = array_values($array);

        }

    }

    //return $array;
    foreach ($array as $x) {
        echo $x . ", ";
    }
}

