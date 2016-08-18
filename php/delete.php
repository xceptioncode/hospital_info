
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Удаление</title>
</head>

<body>
<?php
require_once "connection.php";
$id = $_REQUEST['user'];
$delete_sql = "DELETE FROM patient WHERE id=$id";
mysqli_query($mysqli, $delete_sql) or 
die("<p>При удалении произошла ошибка</p>". mysql_error());
echo "<p>Запись была успешно удалена!</p>";
?>