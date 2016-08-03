<?php 
require_once "connection.php";

if (!isset($_POST['name'])) {
	die();
}
if (!isset($_POST['mobile'])) {
	die();
}
if (!isset($_POST['email'])) {
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
$mobile=$_POST['mobile'];
$email=$_POST['email' ];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];

$query="INSERT INTO `laboratory` (name,contact,email,address,city,state) VALUES ('$name',$mobile,'$email','$address','$city','$state')";

$result = mysqli_query($mysqli, $query);
echo mysql_error();
 if($result){
	echo "Account Successfully Created";
} else {
  echo "Failed to insert data information!";
  }


















?>