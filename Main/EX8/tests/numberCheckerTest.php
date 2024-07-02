<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class numberCheckerTest extends TestCase
{
   

    public function testClassisEven(){
        $num = new NumberChecker(15);
        $num2 = new NumberChecker(16);
        $this -> assertIsBool($num->isEven());
        $this ->assertFalse($num->isEven());
        $this ->assertTrue($num2->isEven());
    }

    public function testClassisPositive(){
        $num = new NumberChecker(0);
        $num2 = new NumberChecker(15);
        $this -> assertIsBool($num->isPositive());
        $this ->assertFalse($num->isPositive());
        $this ->assertTrue($num2->isPositive());


    }
}