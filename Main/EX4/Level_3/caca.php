<?php

$array = [10, 20, 5, 3, 7, 13, 11];

$total = array_reduce($array, 'sumarPrimos', 0);

echo "Total de números primos: $total";

function sumarPrimos($total, $num) {
    if (esPrimo($num)) {
        $total += $num;
    }
    return $total;
}

function esPrimo($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
?>
