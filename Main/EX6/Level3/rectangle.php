<?php
include_once("shape.php");
include_once("RegularShape.php");


class rectangle extends RegularShape implements Shape{

    public function calculateArea(){
        return $this-> base * $this->altura;
    }


}