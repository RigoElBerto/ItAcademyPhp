<?php
namespace shape;

require_once 'shape.php';

class Triangle  extends Shape{
    public function calculateArea():float{
        return $this->altura * $this->amplada / 2;
    }
    
}

