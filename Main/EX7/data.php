<?php
// I made different versions of how to save the info from the form just to try differet options
$_SESSION["nom"] = $_POST ['name'];
$mail = $_POST ['mail'];
$edad  = $_POST ['edad'];

$_SESSION ["edad"]= $edad; 
//not required in the exercice, but I wanted to test :P
function ValidateEmail($email) {
    $validation = false;
    //This code checks if user's mail entry matches with a mail structure (xxxxx@xxxx.xxx)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validation = true;
    } else {
        $validation = false;
    }
    return $validation;
}

if (ValidateEmail($mail)) {
    //I add the mail into the session only if it's a valid mail
    $_SESSION["mail"] = $mail;
} else {
    $mail = "invàlid";
}

echo "El nom de l'usuari és " . $_SESSION["nom"] . ", el seu correu és " . $mail . " i té " . $edad . " anys.";

echo "<br>";
print_r($_SESSION);