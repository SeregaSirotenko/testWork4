<?php

$customers = [];

$dir = __DIR__ . '/customers';
$files = scandir($dir);
$i = 0;

foreach ($files as $file) {
	if ($file != '.' && $file != '..') {
		$path = $dir . '/' . $file;
    	$res = file_get_contents($path);
    	$val = explode(';', $res);
    	$customers[$i]['name'] = $val[0];
    	$customers[$i]['age'] = $val[1];
    	$customers[$i]['sex'] = $val[2];
    	$customers[$i]['phone'] = $val[3];
    	$i++;
	}
}

?>