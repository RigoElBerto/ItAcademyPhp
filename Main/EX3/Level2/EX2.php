<?php

define ('CHOC', 1.0);
define ('XICL', 0.5);
define ('CANDY', 1.5);

echo calculateTotal(3,5,8);

function totalChoc($numChoc): float{

    return $numChoc * CHOC;
}

function totalXicl ($numXicl){

    return $numXicl * XICL;
}

function totalCandy ($numCandy){
    return $numCandy * CANDY;
}


function calculateTotal($numChoc, $numXicl, $numCandy): string{
$total = totalChoc($numChoc) + totalXicl($numXicl) + totalCandy($numCandy);

return totalChoc($numChoc) . "+".  totalXicl($numXicl) . "+" . totalCandy($numCandy) . "=" . $total ;
}
