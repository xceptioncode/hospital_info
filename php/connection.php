<?php
$dbhost = "localhost"; 			// Имя хоста БД
$dbusername = "root"; 			// Пользователь БД
$dbpass = ""; 					// Пароль к базе
$dbname = "hospital_info"; 			// Имя базы

$mysqli = @new mysqli($dbhost, $dbusername, $dbpass,$dbname);

if ($mysqli->connect_error) {
    die('Connect Error: ' . $mysqli->connect_error);
}

?>