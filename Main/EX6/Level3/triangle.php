<?php
include_once("shape.php");
include_once("RegularShape.php");

class Triangle extends RegularShape implements Shape{

    public function calculateArea(){
        return $this-> base * $this->altura / 2;
    }

}