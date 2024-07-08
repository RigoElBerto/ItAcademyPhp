<?php

class Cinema{
private $name;
private $poblation;
private $movies;

public function __construct($name, $poblation, $movies){
    $this->name = $name;
    $this->poblation = $poblation;
    $this->movies = $movies;
}

public function getMovies(){
return $this->movies;
}

public function getName(){
    return $this->name;
}
public function getPoblation(){
    return $this->poblation;
}

/*public function moviebyDirector($director): string | bool{
    foreach($this->movies as $movie){
        if($director == $movie->getDirector){
            return "El director " . $director . " ha dirigit " . $movie->getName() . ", disponible al cinema " . 
            $this->getName() . ", a " . $this->getPoblation();

        }
        
    }
    return false;
}
    */
public function filterbyDirector($director){
    return $this->getMovies()->getDirector ==$director;
}

}
