<?php

require_once 'readFromConsole.php';

function getSum($arr){
	$sum = 0;
	for($i=0; $i<count($arr); $i++)
		$sum += $arr[$i];
	return $sum;
}

function task669(){
	echo "Введите числа";

	$arr = readFromCosnole();
	$sum = getSum($arr);

	echo "Сумма чисел: $sum";
}

task669();