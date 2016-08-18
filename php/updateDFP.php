<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="../style.css">
<title>Untitled Document</title>
</head>

<body>
<?php
require_once "connection.php";
$id=$_REQUEST['id'];
$name=trim($_REQUEST['name']);
$fname=trim($_REQUEST['surname']);
$age=trim($_REQUEST['age']);
$mobile=trim($_REQUEST['contact']);
$address=trim($_REQUEST['address']);
$city=trim($_REQUEST['city']);
$state=trim($_REQUEST['state']);


$update_sql = "UPDATE patient SET name='$name', `father/spouse name`='$fname', age='$age', contact='$mobile', address='$address', city='$city', state='$state' WHERE id='$id'";
mysqli_query($mysqli, $update_sql) or die("Ошибка вставки" . mysql_error());
echo '<p>Запись успешно обновлена!</p>';
?>
</body>
</html>