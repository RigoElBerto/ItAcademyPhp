<?php 

//Exercici 4

//In order to check that this function works in every kind of number, I randomize the base number, and how it jumps from number to number
$jump= rand(1,5);
$num = rand(10, 30);

echo countNum($jump, $num);
echo countNum($jump);

//echo countNum (jump: $jump);


function countNum( int $jump, int $num = 10): string {  
    $answer = "";
    $a = 1;
        for ($i = 0; $i < $num; $i = $i + $jump) {
            $answer .= "Number " . $a . " of the sequence:" . $i . "<br>";
            $a++;
        }
    return $answer;
}