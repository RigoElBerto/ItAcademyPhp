<?php
namespace shape;

require_once 'shape.php';

class Triangle  extends Shape{
    public function calculateArea():float{
        return $this->getAltura() * $this->getAmplada() / 2;
    }
    
}

