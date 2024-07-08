<?php

class Movie{

private $name;
private $duration;
private $director;

public function __construct($name, $duration, $director){
    $this->name = $name;
    $this->duration = $duration;
    $this->director = $director;
}

public function getDuration(){
    return $this->duration;
}

public function getDirector(){
    return $this->director;
}

public function __tostring(){
    return "<br>Nom: " . $this->name ."<br>Duració: ". $this->duration ."<br>Director: " . $this->director ."<br>";
}
}