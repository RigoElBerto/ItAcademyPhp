<?php

include_once("shape.php");
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * ($this->radius ** 2);
    }

}

