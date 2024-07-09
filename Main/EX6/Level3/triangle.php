<?php
include_once("shape.php");

class Triangle implements Shape{
    private $base;
    private $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calculateArea(){
        return $this-> base * $this->altura / 2;
    }

}