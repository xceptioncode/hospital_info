<?php
require_once "connection.php";
//$query='SELECT * FROM `credentials`';
//$query='INSERT INTO `credentials` (`user type`, `user id`, `password_2`) VALUES ("lab","3","1234")';
echo "<pre>";
print_r($_POST);
echo "</pre>";
if (!isset($_POST['user_id'])) {
	die();
}
if (!isset($_POST['password_2'])) {
	die();
}
if (!isset($_POST['user_type'])) {
	die();
}
$user_id=trim($_POST['user_id']);
$query="SELECT * FROM `credentials` WHERE `user id`=$user_id";
$result = mysqli_query($mysqli, $query);
/*echo "result: ";
echo "<br>";
print_r($result);*/
echo mysql_error();
if(isset($result)){
	while ($row = mysqli_fetch_assoc($result)){
		$res[] = $row;
		//echo "result: ";
		//echo "<br>";
		//print_r($row);
	}
} else
{
echo "There is no user with such id";
die();
}
$check=false;
foreach ($res as $key => $value) {
	if($value['user type']==$_POST['user_type']){
		$check=true;
	}
	else{
		echo "There is no user with this user_type";
		die();
	}
}
foreach ($res as $key => $value) {
	if(($value['password_2']==$_POST['password_2'])&&($check)){
		echo "hello, ".$value['user id'];
	}
	else{
		echo "The password is incorrect";
	}
}
/*echo "<br>";
echo "<pre>";
print_r($res);
echo "</pre>";*/
?>
