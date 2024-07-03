<?php
namespace animals;

require_once 'animal.php';

class Dog extends Animal{

public function MakeSound(){
    return "Bup Bup";
}
}