<?php

require 'pokerDice.php';
    

$dice1 = new PokerDice();
$dice2 = new PokerDice();
$dice3 = new PokerDice();
$dice4 = new PokerDice();
$dice5 = new PokerDice();


$arrayDice = array($dice1, $dice2, $dice3, $dice4, $dice5);

ThrowDices($arrayDice);
echo $dice1->shapeName() . "<br>";
print_r (ThrowDices($arrayDice));
echo "<br>" . $dice1->shapeName();

echo "<br>" . getTotalThrows();

function ThrowDices($arrayDice): array{
$arrayResults = array();
foreach($arrayDice as $Dice){
    $arrayResults[]= $Dice->Throw();
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