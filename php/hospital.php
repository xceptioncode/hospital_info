<?php 
require_once "connection.php";

if (!isset($_POST['name'])) {
	die();
}
if (!isset($_POST['email'])) {
	die();
}
if (!isset($_POST['mobile'])) {
	die();
}
if (!isset($_POST['specialization'])) {
	die();
}
if (!isset($_POST['gender'])) {
	die();
}
if (!isset($_POST['address'])) {
	die();
}
if (!isset($_POST['city'])) {
	die();
}
if (!isset($_POST['state'])) {
	die();
}

print_r($_POST);

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$specialization=$_POST['specialization'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];

$query="INSERT INTO `hospital` (name, email, contact, specialization, gender, address, city, state)
 VALUES ('$name','$email',$mobile,'$specialization','$gender','$address','$city','$state')";

$result = mysqli_query($mysqli, $query);
echo mysql_error();
 if($result){
	echo "Account Successfully Created";
} else {
  echo "Failed to insert data information!";
  }


















?>