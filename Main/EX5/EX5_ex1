<?php


class Employee {
private $name;
private $salary;

public function __construct($name, $salary) {
    $this->name = $name;
    $this->salary = $salary;
}

public function Print(){
    $answer = "";

    if  ($this->salary > 6000){
        $answer .= ". Ha de pagar impostos";
    } else{
        $answer .= "No ha de pagar impostos";
    }

    return "Nom: " . $this->name . "<br>Sou:" . $this->salary . "<br>" . $answer;
}

}