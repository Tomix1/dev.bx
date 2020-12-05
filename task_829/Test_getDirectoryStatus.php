<?php

require_once 'getDirectoryStatus.php';

function test(array $res){
	$expectedResult =
		['dirs' => [
			'a' => [
				'is_readable' => true,
				'is_writeable' => true,
			],
			'b' => [
				'is_readable' => false,
				'is_writeable' => true,
			],
			'c' => [
				'is_readable' => true,
				'is_writeable' => false,
			],
		],
		 'files' => [
			 '1.txt' => [
				 'is_readable' => true,
				 'is_writeable' => false,
				 'size' => 3,
			 ],

			 '2.txt' => [
				 'is_readable' => false,
				 'is_writeable' => true,
				 'size' => 0,
			 ],
			 '3.txt' => [
				 'is_readable' => true,
				 'is_writeable' => true,
				 'size' => 17,
			 ],
		 ],
		];
	echo "test 1: " . ( $res === $expectedResult ? " passed" : " failed") . PHP_EOL;
}

$array = getDirectoryStatus("./test");
test($array);
print_r($array);