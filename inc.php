<?php

$res = createNewCustomer($_POST['name'], $_POST['age'], $_POST['sex'], $_POST['phone']);
if ($res === true) {
	echo 'Сотрудник доюавлен';
} else {
	echo 'Произошла ошибка добавления сотрудника';
}