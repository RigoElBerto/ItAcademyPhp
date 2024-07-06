<?php

$arrey = ["Juan" => [2,5,7,6,4], "Helena" => [7, 8, 7, 9, 5], "Isidro"=>[9, 8, 10, 7, 8] ];

$notaTotal = 0;


foreach ($arrey as $name => $note) {
    $notaTotal += calculateMedia($name, $arrey);
    echo $name . ":" . calculateMedia($name, $arrey) . "<br>";
}

echo "media total: ". $notaTotal / count($arrey);

function calculateMedia($i, $arrey):float{
    $notaMedia = 0;
        foreach($arrey[$i] as $notes){
            $notaMedia += $notes;
        }



return $notaMedia / 5;
}