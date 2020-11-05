<?php

function readFromCosnole(){
	echo "[для завершения ввода нажмите \"Enter\" 2 раза]:\n";
	$input = trim(fgets(STDIN));
	while(!empty($input) || $input === "0"){
		$tmp = explode(" ", $input);
		if(empty($arr)) $arr=$tmp;
		else $arr = array_merge($arr, $tmp);
		$input = trim(fgets(STDIN));
	}
	return $arr;
}