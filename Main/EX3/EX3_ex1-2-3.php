<?php 


//Exercici 1
$num1= 3;
$surname= "del Arco";
$double= 3.5;
$bool = false;

$name = "ALBERT";

define('NOM', "ALBERT");


echo "<h1>". NOM . "</h1>" ;

//Exercici 2

$helloWorld = "Hello, World!";

echo $helloWorld. "<br>";
echo strtoupper($helloWorld). "<br>";
echo strlen($helloWorld). "<br>";
echo strrev($helloWorld). "<br>";

$myString = "Aquest és el curs de PHP.";

$concatenate = $helloWorld . $myString;

echo $helloWorld. $myString. "<br>";
echo $concatenate. "<br>";

// Exercici 3
// a)
$x = 1;
$y = 2;
$n = 1.5;
$m = 3.5;

echo $x. "<br>". $y . "<br>";
echo $x + $y. "<br>";
echo $x - $y. "<br>";
echo $x * $y. "<br>";
echo $x % $y. "<br>";

echo $n. "<br>". $m . "<br>";
echo $n + $m. "<br>";
echo $n - $m. "<br>";
echo $n * $m. "<br>";
echo $n % $m. "<br>";

echo $x * 2 . "<br>";
echo $y * 2 . "<br>";
echo $n * 2 . "<br>";
echo $m * 2 . "<br>";

echo $x + $y + $n + $m . "<br>";
echo $x * $y * $n * $m . "<br>";

// b)

$operands = array('+', '-', '*', '/');
$op = $operands[rand(0, count($operands) -1)];
echo calculadora(10, 12, $op);

function calculadora (int $x, int $y,string $operand): float{
    $result = 0;
    if ($operand== '+') {
        $result = $x + $y;
    } else if ($operand== '-') {
        $result = $x - $y;
    } else if ($operand== '*') {
        $result = $x * $y; 
    } else if ($operand== '/') {
        $result = $x / $y;
    }

return $result;
}