<?php

function getDirectoryStatus(string $pathDir="."){
	$currentDir = opendir($pathDir);
	$list = ["dirs" => [], "files" => []];
	while(true){
		$element = readdir($currentDir);
		if (!$element){
			break;
		}
		if (in_array($element, [".", ".."])){
			continue;
		}
		if (is_dir("$pathDir/$element")){
			$arrDirs[$element] = array("is_readable" => is_readable("$pathDir/$element"),
									   "is_writeable" => is_writeable("$pathDir/$element"));
		}
		elseif (is_file("$pathDir/$element")){
			$arrFiles[$element] = array("is_readable" => is_readable("$pathDir/$element"),
										"is_writeable" => is_writeable("$pathDir/$element"),
										"size" => filesize("$pathDir/$element"));
		}
	}
	$list["dirs"] = $arrDirs;
	$list["files"] = $arrFiles;
	closedir($currentDir);
	return $list;
}