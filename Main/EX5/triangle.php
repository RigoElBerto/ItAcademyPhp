<?php
namespace shape;

require_once 'EX5_ex2.php';

class Triangle  extends Shape{
    public function calculateArea():float{
        return $this->getAltura() * $this->getAmplada() / 2;
    }
    
}

