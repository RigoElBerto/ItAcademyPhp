<?php 

//Exercici 4

$num = 10;
//In order to check that this function works in every kind of number, I randomize the base number, and how it jumps from number to number
$jump= rand(1,5);
$num = rand(10, 30);

echo countNum($num, $jump);

function countNum(int $num,int $jump): string {  
    $answer = "";
    $a = 1;
        for ($i = 0; $i < $num; $i = $i + $jump) {
            $answer .= "Number " . $a . " of the sequence:" . $i . "<br>";
            $a++;
        }
    return $answer;
}