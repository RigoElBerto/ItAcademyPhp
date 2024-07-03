<?php
$note = rand(0,100);

echo calcNote($note);

function calcNote(int $note): string{
$ans = "";
    if($note <33){
        $ans = "L'alumne ha obtingut un " . $note . "%, i per tant reprovarà.";
    } elseif($note <= 44){
        $ans = "L'alumne ha obtingut un ". $note . "%. Anirà a Tercera Divisió.";
    } elseif($note <= 59){
        $ans = "L'alumne ha obtingut un ". $note . "%. Anirà a Segona Divisió.";
    } else {
        $ans = "L'alumne ha obtingut un ". $note . "%. Anirà a Primera Divisió.";
    }

    return $ans;
}