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
        if (stripos($words[$i], $char) === false){ //strpos --> demana un string i un char i et retorna en quina pose està aquell char dins el string, o false si no hi es
            $check = false;
        }

    }
    return $check;
}
