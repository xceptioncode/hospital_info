<?php 
require_once "connection.php";

if (!isset($_POST['name'])) {
	die();
}
if (!isset($_POST['fname'])) {
	die();
}
if (!isset($_POST['age'])) {
	die();
}
if (!isset($_POST['mobile'])) {
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
/*
$name=stripcslashes($_POST['name']);
$fname=htmlspecialchars($_POST['fname']);
$age=$_POST['age'];
$mobile=$_POST['mobile'];
$address=htmlspecialchars($_POST['address']);
$city=htmlspecialchars($_POST['city']);
$state=htmlspecialchars($_POST['state']);*/

$name=$_POST['name'];
$fname=$_POST['fname'];
$age=$_POST['age'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];

$query="INSERT INTO `patient` (name,`father/spouse name`,age,contact,address,city,state) VALUES ('$name','$fname',$age,$mobile,'$address','$city','$state')";
//$query="INSERT INTO `patient` (name,'father/spouse name',age,contact,address,city,state) VALUES($name, $fname , $age , $mobile , $address , $city , $state)";
$result = mysqli_query($mysqli, $query);
echo mysql_error();
 if($result){
	echo "Account Successfully Created";
} else {
  echo "Failed to insert data information!";
  }


















?>