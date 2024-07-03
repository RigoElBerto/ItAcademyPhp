<?php
namespace mammals;

require_once 'animal.php';

class Cat extends Animal{

    public function MakeSound(){
        return "Marrameu Torracastanyes";
    }
}
