<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Вносим изменеиния</title>
</head>

<body>
<?php
require_once "connection.php"; 
$id = $_REQUEST['user'];
$select_sql = "SELECT * FROM patient WHERE id= $id";
$result = mysqli_query($mysqli, $select_sql);
$row = mysqli_fetch_array($result);
printf("<form action='update.php' method='post' name='forma'>
<fieldset>
<input type='hidden' name='id'  value='%s'><br/>
<label for='name'>name:</label><br/>
<input type='text' name='name' size='30' value='%s'><br/>
<label for='surname'>father/spouse name:</label><br/>
<input type='text' name='surname' size='30' value='%s'><br/>
<label for='age'>age:</label><br/>
<input type='text' name='age' size='30' value='%s'><br/>
<label for='contact'>contact</label><br/>
<input name='contact' type='text'  size='30' value='%s'><br/>
<label for='address'>address:</label><br/>
<input type='text' name='address' size='30' value='%s'><br/>
<label for='city'>city:</label><br/>
<input type='text' name='city' size='30' value='%s'><br/>
<label for='state'>state:</label><br/>
<input type='text' name='state' size='30' value='%s'><br/>
</fieldset>
<br/>
<fieldset>
<input id='submit' type='submit' value='Редактировать запись'><br/>
</fieldset>
</form>",$row['id'], $row['name'], $row['father/spouse name'], $row['age'], $row['contact'], $row['address'], $row['city'], $row['state']);
?>

<a href="info_form.html">Добавить пользователя</a><br/><br/>
<a href="search_user.html">Вернуться к поиску</a><br/><br/>
<a href="select_change.php">Вернуться к выбору записей для редактирования</a><br/><br/>
</body>
</html>