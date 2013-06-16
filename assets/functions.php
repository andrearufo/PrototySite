<?php

// list files (images) in the $dirname folder

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

// get the next elements of the array

function nextItem($list, $current){
	
	$numitem = count($list)-1;
	$poscur = array_search($current, $list);
	
	if($poscur == $numitem){
		$key = 0;
	} else {
		$key = $poscur+1;
	}
	
	return $list[$key];

}

function prevItem($list, $current){
	
	$numitem = count($list)-1;
	$poscur = array_search($current, $list);
	
	if($poscur == 0){
		$key = $numitem;
	} else {
		$key = $poscur-1;
	}
	
	return $list[$key];

}

?>