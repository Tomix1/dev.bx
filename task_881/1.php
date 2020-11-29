<?php

require_once '../readFromConsole.php';

const INF = 1e9;

function numberOfHighs(array $numbers){
	$max = -INF;
	foreach ($numbers as $number){
		$max = max($max, $number);
	}
	$count = 0;
	foreach ($numbers as $number){
		if ($number === $max){
			$count++;
		}
	}
	return $count;
}

function tests(){
	echo "test 1: " . (numberOfHighs(array(-1, 0, 1)) === 1 ? " passed" : " failed") . PHP_EOL;
	echo "test 2: " . (numberOfHighs(array(0)) === 1 ? " passed" : " failed") . PHP_EOL;
	echo "test 3: " . (numberOfHighs(array(1, 1, 1)) === 3 ? " passed" : " failed") . PHP_EOL;
	echo "test 4: " . (numberOfHighs(array(-1, -1, -1)) === 3 ? " passed" : " failed") . PHP_EOL;
	echo "test 5: " . (numberOfHighs(array(100, 1000, 1000, 100, 1)) === 2 ? " passed" : " failed") . PHP_EOL;
	echo "test 6: " . (numberOfHighs(array(0)) !== 0 ? " passed" : " failed") . PHP_EOL;
	echo "test 7: " . (numberOfHighs(array(1, 0, -1)) !== 2 ? " passed" : " failed") . PHP_EOL;
	echo "test 8: " . (numberOfHighs(array(-1, -100, -2)) !== 2 ? " passed" : " failed") . PHP_EOL;
}

echo "Введите числа";
$numbers = readFromCosnole();
echo numberOfHighs($numbers).PHP_EOL;

tests();
