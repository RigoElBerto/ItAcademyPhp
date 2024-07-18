<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ex5TestDP extends TestCase{

#[\PHPUnit\Framework\Attributes\DataProvider('providerSus')]
public function testReprovar($number){
    $test = new Ex5($number);
    $this->assertSame($test->calcNote(), "L'alumne ha obtingut un " . $test->getNote() . "%, i per tant reprovarà.");
}

#[\PHPUnit\Framework\Attributes\DataProvider('provider3')]
public function testTerDivisio($number) {
    $test = new Ex5($number);
    $this->assertSame($test->calcNote(), "L'alumne ha obtingut un ". $test->getNote() . "%. Anirà a Tercera Divisió.");
}

#[\PHPUnit\Framework\Attributes\DataProvider('provider2')]
public function testSecDivsio($number){
    $test = new Ex5($number);
    $this->assertSame($test->calcNote(), "L'alumne ha obtingut un ". $test->getNote() . "%. Anirà a Segona Divisió.");
}

#[\PHPUnit\Framework\Attributes\DataProvider('provider1')]
public function testPrimDivisio($number){
    $test = new Ex5($number);
    $this->assertSame($test->calcNote(), "L'alumne ha obtingut un ". $test->getNote() . "%. Anirà a Primera Divisió.");
}



public static function providerSus(): array{
    return [[-15],[20],[25]];
}

public static function provider3(): array{
    return [[34],[40],[44]];
}

public static function provider2(): array{
    return [[45],[50]];
}
public static function provider1(): array{
    return [[80],[1150]];
}
}