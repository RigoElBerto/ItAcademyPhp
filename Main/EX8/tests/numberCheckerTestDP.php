<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class numberCheckerTestDP extends TestCase
{

    #[\PHPUnit\Framework\Attributes\DataProvider('providerEven')]
    public function testClassisEven($number): void {
        $checker = new NumberChecker($number);
        $this->assertIsBool($checker->isEven());
        $this->assertTrue($checker->isEven());
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('providerOdd')]
    public function testClassisOdd($number): void {
        $checker = new NumberChecker($number);
        $this->assertIsBool($checker->isEven());
        $this->assertFalse($checker->isEven());
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('providerEven')]
    public function testClassisPositive($number): void {
        $checker = new NumberChecker($number);
        $this->assertIsBool($checker->isPositive());
        $this->assertTrue($checker->isPositive());
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('providerOdd')]
    public function testClassisNegative($number): void {
        $checker = new NumberChecker($number);
        $this->assertFalse($checker->isPositive());
    }

    public static function providerEven(): array {
        return [
            [24],
            [16]
        ];
    }

    public static function providerOdd(): array {
        return [
            [-15],
            [-19]
        ];
    }
}
