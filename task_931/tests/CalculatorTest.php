<?php
//CalculatorTest.php
use \PHPUnit\Framework\TestCase;
require_once (__DIR__ . '/../lib/Calculator.php');

class CalculatorTest extends TestCase
{
	public function testAdd(): void
	{
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->add(2, 2));
	}

	public function testSubtract(): void
	{
		$calculator = new Calculator();
		self::assertEquals(0, $calculator->subtract(2, 2));
	}

	public function testMultiply(): void
	{
		$calculator = new Calculator();
		self::assertEquals(6, $calculator->multiply(3, 2));
	}

	public function testDivide(): void
	{
		$calculator = new Calculator();
		self::assertEquals(3, $calculator->divide(6, 2));
	}

	public function testPow(): void
	{
		$calculator = new Calculator();
		self::assertEquals(81, $calculator->pow(3, 3));
	}

	public function testSqrt(): void
	{
		$calculator = new Calculator();
		self::assertEquals(2.646, $calculator->sqrt(7, 0.001));
	}

	public function testDivideException(): void
	{
		$calculator = new Calculator();

		$this->expectException(\InvalidArgumentException::class);
		$this->expectExceptionMessage('Divider cant be a zero');
		$calculator->divide(5, 0);
	}
}
