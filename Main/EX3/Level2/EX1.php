<?php
define ("MIN","0.1");
define ("EXTRA","0.05");
$time = 5;

echo calculateCost($time);

function calculateCost(int $time ) : string{
    $cash = MIN; 
    
    if( $time < 0){
        return "Num no valid";
    }

    if( $time > 3){
        $extra = ($time - 3) * EXTRA;
        $cash =+ $extra;
    }

    return "El coste es ". $cash . "€";
}