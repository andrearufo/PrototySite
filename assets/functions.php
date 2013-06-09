<?php

// elenca file nella cartella

function listfiles($dirname,$arrayext=array('.jpg','.jpeg','.png')){
	$arrayfiles=Array();
	if(file_exists($dirname)){
		$handle = opendir($dirname);
		while (false !== ($file = readdir($handle))) { 
			if(is_file($dirname.$file)){
				$ext = strtolower(substr($file, strrpos($file, "."), strlen($file)-strrpos($file, ".")));
				if(in_array($ext,$arrayext)){
					array_push($arrayfiles,$file);
				}
			}
		}
		$handle = closedir($handle);
	}
	sort($arrayfiles);
	return $arrayfiles;
}

?>