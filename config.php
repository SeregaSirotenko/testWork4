<?php

header('Content-Type: text/html; charset=utf-8');

$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$phone = $_POST['phone'];

$myDoc = __DIR__ . '/customers/' . uniqid() . '.txt';

$str = $name . ';' . $age . ';' . $sex . ';' . $phone;

if (file_put_contents($myDoc, $str)) {
    echo 'Сотрудник добавлен';
}else{
    echo 'Ошибка при добавлении сотрудника';
}

?>