<?php
namespace  shape;

abstract class Shape{
protected $altura ;
protected $amplada;

public function __construct($altura,$amplada){
    $this->altura = $altura;

    $this->amplada = $amplada;
}

public function getAltura(){
    return $this->altura;
}

public function getAmplada(){
    return $this->amplada;
}

abstract public function calculateArea(): float;


}