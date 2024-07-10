<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ex5Test extends TestCase{

private $test;    

function setUp() : void{
    $this->test = new Ex5(45);
   
}

public function testClassConstructor(){
$this->assertSame(45, $this->test->getNote());

}

public function testReprovar(){
    $this->test->setNote(20);
    $this->assertSame($this->test->calcNote(), "L'alumne ha obtingut un " . $this->test->getNote() . "%, i per tant reprovarà.");
}

public function testTerDivisio() {
    $this->test->setNote(44);
    $this->assertSame($this->test->calcNote(), "L'alumne ha obtingut un ". $this->test->getNote() . "%. Anirà a Tercera Divisió.");
}

public function testSecDivsio(){
    $this->test->setNote(45);
    $this->assertSame($this->test->calcNote(), "L'alumne ha obtingut un ". $this->test->getNote() . "%. Anirà a Segona Divisió.");
}

public function testPrimDivisio(){
    $this->test->setNote(80);
    $this->assertSame($this->test->calcNote(), "L'alumne ha obtingut un ". $this->test->getNote() . "%. Anirà a Primera Divisió.");
}
}