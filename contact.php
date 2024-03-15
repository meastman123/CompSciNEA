<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','Data.db');

// get the post records
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$tel = $_POST['date'];

// database insert SQL code
$sql = "INSERT INTO `Data` (`UserID`, 'UserName', `UserEmail`, `UserTel`) VALUES ( '1','$full_name', '$email', '$tel')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

