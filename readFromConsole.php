<?php

function typeConversion($tmp){
	foreach($tmp as $value){
		switch ($value){
			case "null":
				$value = null;
				break;
			case "true":
				$value = (boolean)true;
				break;
			case "false":
				$value = (boolean)false;
				break;
			case "0":
				$value = 0;
				break;
			case is_numeric($value):
				$value = +$value;
				break;
			default:
				$value = (string)$value;
		}
		$arr[] = $value;
	}
	return $arr;
}

// Функция readFromCosnole считывает строку, возвращает массив со строгой типипизацией элементов

function readFromCosnole(string $input = null){
	if(!empty($input)|| $input === "0"){
		$tmp = explode(" ", $input);
		return typeConversion($tmp);
	}
	else{
		echo "[для завершения ввода нажмите \"Enter\" 2 раза]:\n";
		$input = trim(fgets(STDIN));
	}
	while(!empty($input) || $input === "0"){
		$tmp = explode(" ", $input);
		if(empty($arr)){
			$arr = typeConversion($tmp);
		}
		else{
			$arr = array_merge($arr, typeConversion($tmp));
		}
		$input = trim(fgets(STDIN));
	}
	return $arr;
}