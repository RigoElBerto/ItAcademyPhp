<?php
namespace shape;
require_once 'EX5_ex2.php';
class Rectangle extends Shape{
    public function calculateArea():float{
        return $this->getAltura() * $this->getAmplada();
    }
    
}
