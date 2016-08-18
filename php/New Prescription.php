<?php 
require_once "connection.php";

if (!isset($_POST['info'])) {
	die();
}
if (!isset($_POST['complaint'])) {
	die();
}
if (!isset($_POST['pres'])) {
	die();
}
if (!isset($_POST['test'])) {
	die();
}

print_r($_POST);

$info=$_POST['info'];
$complaint=$_POST['complaint'];
$pres=$_POST['pres'];
$test=$_POST['test'];
$doctorId=1;
$patientId=2;

$query="INSERT INTO `prescription` (Doctor_id, Patient_id, short_info)
 VALUES ('$doctorId',$patientId,'$info')";

$result = mysqli_query($mysqli, $query);
echo mysql_error();
 if($result){
	echo "1st part Successfully Created";
} else {
  echo "Failed to insert data information in 1st part!";
  }

$query2="INSERT INTO `prescription-details` VALUES ('$pres',LAST_INSERT_ID(),'$test',now(),'$complaint')";

$result2 = mysqli_query($mysqli, $query2);
echo mysql_error();
 if($result2){
	echo "Account Successfully Created";
} else {
  echo "Failed to insert data information!";
  }
?>	