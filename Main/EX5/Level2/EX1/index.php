<?php

require 'pokerDice.php';
$arrayDice = [];   

for ($i = 0; $i < 5; $i++) {
   $arrayDice[$i] = new PokerDice();
}

ThrowDices($arrayDice);
echo $arrayDice[0]->shapeName() . "<br>";
print_r (ThrowDices($arrayDice));
echo "<br>" . $arrayDice[0]->shapeName();
echo "<br>" . getTotalThrows();

function ThrowDices($arrayDice): array{
    $arrayResults = array();
    foreach($arrayDice as $Dice){
        $Dice->Throw();
        $arrayResults[]= $Dice->shapeName();
    }
    countTotalThrows();
    return $arrayResults;
}

function countTotalThrows(){
    PokerDice::$counter +=5;
}


function getTotalThrows():int {
return PokerDice::$counter;
}