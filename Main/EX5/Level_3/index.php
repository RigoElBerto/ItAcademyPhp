<?php

include("cinema.php");
include("movie.php");

$movie1 = new Movie("Whiplash", 107,"Damian Chazelle");
$movie2 = new Movie("La Gran Belleza", 142,"Paolo Sorrentino");
$movie3 = new Movie("Civil War", 109,"Alex Garland");
$movie4 = new Movie("Funny Gaes", 109,"Michael haneke");
$movie5 = new Movie("Inside Out 2", 96,"Kelsey Mann");

$arrayMovies = array($movie1, $movie5, $movie5);
$arrayMovies2 = array($movie3, $movie4, $movie5);

$cine1 = new Cinema("Renoir Floridablanca", "Barcelona",$arrayMovies);
$cine2 = new Cinema("Splau","Cornellà",$arrayMovies2);
$arrayCines = array($cine1, $cine2);


echo searchDirector($arrayCines, "Kelsey Mann");
 function seeMovies($cine): string{
    $ans= "";
    foreach($cine->getMovies() as $movie){
        $ans += $movie->__tostring() . "<br>";
    }
    return $ans;
 }

 function compareTime($cine): int{
    $duration= 0;
    foreach($cine->getMovies() as $movie){
        if($duration < $movie->getDuration()){
            $duration = $movie->getDuration();
        }
    }
    return $duration;
 }

 function searchDirector($arrayCines, $director){
    $answer="";
    $arrayTotal = [];
    foreach($arrayCines as $cine){
        $arrayMovies = $cine->getMovies();
        $arrayTotal = array_merge($arrayTotal, array_filter($arrayMovies, function ($movie) use ($director){
            return $movie->getDirector()== $director;
        })); 
    }

    foreach($arrayTotal as $movie){
        $answer .= $movie->__tostring() ."<br>";
    }
    return $answer;
 }

 