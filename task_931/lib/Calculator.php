<?php
//Calculator.php

class Calculator
{
	public function add(int $a, int $b): int
	{
		return $a + $b;
	}

	public function subtract(int $a, int $b): int
	{
		return $a - $b;
	}

	public function multiply(int $a, int $b): int
	{
		return $a * $b;
	}

	public function divide(int $a, int $b): float
	{
		if($b === 0)
		{
			throw new \InvalidArgumentException('Divider cant be a zero');
		}

		return $a / $b;
	}

	public function pow(int $a, int $n): float
	{
		if ($n > 0){
			$res=$a;
			for($i=0; $i<$n; $i++)
			{
				$res *= $a;
			}
			return $res;
		}
		elseif ($n === 0){
			return 1;
		}
		else{
			$res=$a;
			for($i=0; $i>$n; $i--)
			{
				$res *= $a;
			}
			return 1/$res;
		}

	}

	public function sqrt(int $a, float $eps): float
	{
		$s = (float) $a;
		$x = 1.0;
		while(abs($x * $x - $s) > $eps)
		{
			$x = ($x * $x + $s) / (2.0 * $x);
		}
		return round($x, strlen(explode('.', $eps)[1]), PHP_ROUND_HALF_UP);
	}
}