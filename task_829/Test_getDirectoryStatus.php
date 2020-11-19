<?php

require_once 'getDirectoryStatus.php';

$array = getDirectoryStatus("./test");
print_r($array);