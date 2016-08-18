<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" href="style.css" type="text/css">
<title>Выбор пользователя для редактирования.</title>
</head>
<body>
<form action="edit.php" method="post">
<fieldset>
<?php
require_once "connection.php"; 
$select_sql = "SELECT id, name, `father/spouse name`, age, contact FROM patient";
$result = mysqli_query($mysqli, $select_sql);
$row = mysqli_fetch_array($result);
do
{
printf("<input type='radio' name='user' value='%s'>%s %s %s %s<br/><br/><br/><br/>", $row['id'], $row['name'],  $row['father/spouse name'], $row['age'], $row['contact']);	
}
while($row = mysqli_fetch_array($result))
?>
</fieldset>
<fieldset>
<input type="submit" value="Выбрать элемент">
</fieldset>
</form>
<a href="info_form.html">Добавить пользователя</a><br/><br/>
<a href="search_user.html">Вернуться к поиску</a><br/><br/>
</body>
</html>
