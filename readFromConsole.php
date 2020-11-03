<?php

function readFromCosnole(){
	echo "[для завершения ввода нажмите \"Enter\" 2 раза]:\n";
	while(!empty($input = trim(fgets(STDIN))) or $input === "0"){
		$tmp = explode(" ", $input);
		if(empty($arr)) $arr=$tmp;
		else $arr = array_merge($arr, $tmp);
	}
	return $arr;
}