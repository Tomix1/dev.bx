<?php

require_once 'readFromConsole.php';

function getSum($arr){
	$sum = 0;
	foreach($arr as $value)
		$sum += $value;
	return $sum;
}

function task669(){
	echo "Введите числа";

	$arr = readFromCosnole();
	$sum = getSum($arr);

	echo "Сумма чисел: $sum";
}

task669();