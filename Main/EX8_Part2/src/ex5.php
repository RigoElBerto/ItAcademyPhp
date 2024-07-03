<?php

class Ex5{

    private $note;
    
    public function __construct($note){
        $this->note = $note;
    }
    
    public function getNote(){
        return $this->note;
    }

    function calcNote(): string{
    $ans = "";
        if($this->note <33){
            $ans = "L'alumne ha obtingut un " . $this->note . "%, i per tant reprovarà.";
        } elseif(33 <= $this->note && $this->note <= 44){
            $ans = "L'alumne ha obtingut un ". $this->note . "%. Anirà a Tercera Divisió.";
        } elseif(45 <= $this->note && $this->note <= 59){
            $ans = "L'alumne ha obtingut un ". $this->note . "%. Anirà a Segona Divisió.";
        } elseif ($this->note > 60){
            $ans = "L'alumne ha obtingut un ". $this->note . "%. Anirà a Primera Divisió.";
        }
    
        return $ans;
    }
    }


