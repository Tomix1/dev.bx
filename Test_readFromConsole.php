<?php

require_once 'readFromConsole.php';

function Test_readFromconsole(){
	$res = readFromCosnole("true");
	echo "Результат: \"true\" = (" . gettype($res[0]) . ") ". $res[0] . ($res[0] === true ? " passed" : " failed").PHP_EOL;
	$res = readFromCosnole("false");
	echo "Результат: \"false\" = (" . gettype($res[0]) . ") ". $res[0] . ($res[0] === false ? " passed" : " failed").PHP_EOL;
	$res = readFromCosnole("null");
	echo "Результат: \"null\" = (" . gettype($res[0]) . ") ". $res[0] . ($res[0] === null ? " passed" : " failed").PHP_EOL;
	$res = readFromCosnole("1");
	echo "Результат: \"1\" = (" . gettype($res[0]) . ") ". $res[0] . ($res[0] === 1 ? " passed" : " failed").PHP_EOL;
	$res = readFromCosnole("1.3");
	echo "Результат: \"1.3\" = (" . gettype($res[0]) . ") ". $res[0] . ($res[0] === 1.3 ? " passed" : " failed").PHP_EOL;
	$res = readFromCosnole("apple");
	echo "Результат: \"apple\" = (" . gettype($res[0]) . ") ". $res[0] . ($res[0] === "apple" ? " passed" : " failed").PHP_EOL;
	$res = readFromCosnole("0");
	echo "Результат: \"0\" = (" . gettype($res[0]) . ") ". $res[0] . ($res[0] === 0 ? " passed" : " failed").PHP_EOL;
	$res = readFromCosnole("яблоко");
	echo "Результат: \"яблоко\" = (" . gettype($res[0]) . ") ". $res[0] . ($res[0] === "яблоко" ? " passed" : " failed").PHP_EOL;
}

function assertEquals($checkedValue, $exactValue, $testMessage){
	echo $testMessage . "(" . gettype($checkedValue) . ") " . $exactValue . ($checkedValue === $exactValue ? " passed" : " failed").PHP_EOL;
}

Test_readFromconsole();
echo PHP_EOL;

$arr1 = readFromCosnole("true false null 1 1.3 apple 0 яблоко");
$arr2 = array(true, false, null, 1, 1.3, "apple", 0, "яблоко");
$arr3 = array("true", "false", "null", "1", "1.3", "apple", "0", "яблоко");
for($i=0; $i<count($arr1); $i++){
	assertEquals($arr1[$i], $arr2[$i], "Тест $i Результат: \"$arr3[$i]\" = ");
}