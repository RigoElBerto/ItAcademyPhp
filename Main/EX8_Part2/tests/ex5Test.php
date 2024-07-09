<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ex5Test extends TestCase{

private $test1;
private $test2;
private $test3;
private $test4;

function setUp() : void{
    $this->test1 = new Ex5(45);
    $this->test2 = new Ex5(44);
    $this->test3 = new Ex5(20);
    $this->test4 = new Ex5(80);
}

public function testClassConstructor(){
$this->assertSame(44, $this->test2->getNote());

}

public function testcalcNote(){
    $this->assertSame($this->test1->calcNote(), "L'alumne ha obtingut un ". $this->test1->getNote() . "%. Anirà a Segona Divisió.");
    $this->assertSame($this->test2->calcNote(), "L'alumne ha obtingut un ". $this->test2->getNote() . "%. Anirà a Tercera Divisió.");
    $this->assertSame($this->test3->calcNote(), "L'alumne ha obtingut un " . $this->test3->getNote() . "%, i per tant reprovarà.");
    $this->assertSame($this->test4->calcNote(), "L'alumne ha obtingut un ". $this->test4->getNote() . "%. Anirà a Primera Divisió.");

}

}