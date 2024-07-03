<?php

$time = 5;

echo calculateCost($time);

function calculateCost(int $time ) : string{
    $cash = 0; 
    
    if( $time < 0){
        return "Num no valid";
    }

    else if( $time < 3){
        $cash = 0.1;
    } else {
        $extra = ($time -3) * 0.05;
        $cash = 0.1 + $extra;
    }

    return "El coste es ". $cash . "€";
}