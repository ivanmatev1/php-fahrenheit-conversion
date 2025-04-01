<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../src/func.php';

class ConvertCelsiusToFahrenheitTest extends TestCase
{
    public function test_converts_celsius_to_fahrenheit()
    {
        $this->assertEquals(32, convertCelsiusToFahrenheit(0));
        $this->assertEquals(212, convertCelsiusToFahrenheit(100));
        $this->assertEquals(-40, convertCelsiusToFahrenheit(-40));
    }

    public function test_returns_freezing_for_cold()
    {
        $this->assertEquals('freezing', convertCelsiusToFahrenheit('cold'));
    }

    public function test_throws_exception_for_invalid_input()
    {
        $this->expectException(InvalidArgumentException::class);
        convertCelsiusToFahrenheit('hot');
    }
}
