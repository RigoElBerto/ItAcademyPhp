<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class numberCheckerTest extends TestCase
{
    private $checker1;
    private $checker2;

   function setUp(): void
   {
    $this -> checker1 = new NumberChecker(15);
    $this -> checker2 = new NumberChecker(-16);
   }

    public function testClassisEven(){
        $this -> assertIsBool($this->checker1->isEven());
        $this ->assertFalse($this->checker1->isEven());
    }

    public function testClassisOdd(){
        $this ->assertTrue($this->checker2->isEven());
    }

    public function testClassisPositive(){
        $this -> assertIsBool($this->checker1->isPositive());
        $this ->assertFalse($this->checker1->isPositive());
    }

    public function testClassisNegative(){
        $this ->assertTrue($this->checker2->isPositive());
    }
}