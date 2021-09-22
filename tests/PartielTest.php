<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PartielTest extends TestCase
{

    public function testDecimalRoman1(): void
    {
        $this->assertEquals("I", Partiel::decimalToRoman(1));
    }

    public function testDecimalRoman2(): void
    {
        $this->assertEquals("V", Partiel::decimalToRoman(5));
    }

    public function testDecimalRoman3(): void
    {
        $this->assertEquals("IV", Partiel::decimalToRoman(4));
    }

    public function testDecimalRoman4(): void
    {
        $this->assertEquals("IV", Partiel::decimalToRoman(2456));
    }

}
