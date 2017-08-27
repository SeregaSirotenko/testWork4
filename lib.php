<?php

/**
*@author Sergey
*@return array
*/
function getAllCustomers() {

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

    return $customers;
}

/**
*@param string $name string to output
*@param integer $age integer to output
*@param string $sex string to output
*@param integer $phone integer to output
*@author Sergey
*@return boolean
*/
function createNewCustomer($name, $age, $sex, $phone) {

    $myDoc = __DIR__ . '/customers/' . uniqid() . '.txt';

    $str = $name . ';' . $age . ';' . $sex . ';' . $phone;

    if (file_put_contents($myDoc, $str)) {
        return true;
    } else {
        return false;
    }
}

?>