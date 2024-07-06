<?php

$arrayWords = ["picaporte", "XD", "espatula", "XDD"];

$arrayFiltered = array_filter($arrayWords, 'filterEven');

print_r($arrayFiltered);

function filterEven($word): bool{
    if  (strlen($word) % 2==0){
        return true;
    }
    
    return false;
}