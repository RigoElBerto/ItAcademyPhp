<?php


class exercice {
private $note;

public function __construct ($note) {
    $this->note = $note;
}

// Escribir un toString es sobreescribir un método mágico

public function __tostring(){

    return "La nota del ejercicio es " . $this->note;
}
}