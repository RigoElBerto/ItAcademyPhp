<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ex5Test extends TestCase{

public function testClassConstructor(){
$ex5 = new Ex5(44);
$this->assertSame(44, $ex5->getNote());

}

public function testcalcNote(){
    $test1 = new Ex5(45);
    $test2 = new Ex5(44);
    $test3 = new Ex5(20);
    $test4 = new Ex5(80);

    $this->assertSame($test1->calcNote(), "L'alumne ha obtingut un ". $test1->getNote() . "%. Anirà a Segona Divisió.");
    $this->assertSame($test2->calcNote(), "L'alumne ha obtingut un ". $test2->getNote() . "%. Anirà a Tercera Divisió.");
    $this->assertSame($test3->calcNote(), "L'alumne ha obtingut un " . $test3->getNote() . "%, i per tant reprovarà.");
    $this->assertSame($test4->calcNote(), "L'alumne ha obtingut un ". $test4->getNote() . "%. Anirà a Primera Divisió.");

}

}