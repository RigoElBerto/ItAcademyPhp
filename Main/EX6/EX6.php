<?php


abstract class Animal{
private $nom;

public function __construct($nom){
    $this->nom = $nom;
}

public function getNom(){
    return $this->nom;
}
public function MakeSound(){

}
}

class Dog extends Animal{

    public function MakeSound(){
        return "Bup Bup";
    }
}

class Cat extends Animal{

    public function MakeSound(){
        return "Marrameu Torracastanyes";
    }
}

$dogo = new Dog("Snoopy");
$car = new Cat("HUH");

echo "Em dic " . $dogo->getNom() ." i faig " . $dogo->MakeSound() . "<br>";
echo "Em dic " . $car->getNom() ." i faig " . $car->MakeSound();
