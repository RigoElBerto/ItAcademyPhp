<?php
namespace shape;
require_once 'shape.php';
class Rectangle extends Shape{
    public function calculateArea():float{
        return $this->altura * $this->amplada;
    }
    
}
