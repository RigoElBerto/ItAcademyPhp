<?php

$words = array("Hodor", "Kahoot", "Hombres");

$chars = ['a','h', 'o', 'e'];
$char = $chars[rand(0, count($chars) -1)];

print_r($words);

if (check_word($words, $char)) {
    echo "The character is " . $char . " and it is inside all words.";
} else {
    echo "The character is " . $char . " and there are words without it.";
}


function check_word($words, $char): bool {
    $check = true;
    for ($i = 0; $i < count($words) && $check; $i++){
        if (strpos($words[$i], $char) == false){
            $check = false;
        }

    }
    return $check;
}
