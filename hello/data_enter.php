<?php

include "connection.php";

$name = $_GET['name'];
$gender = $_GET['gender'];
$address = $_GET['address'];



$sql = "INSERT INTO `student_details` (`Sid`, `Name`, `Gender`, `Address`) VALUES ('','$name', '$gender', '$address ')";


$query = mysqli_query($connection, $sql);

if(!$query)
	echo "database entry failed"; 
else
	header('location:new.php');

?>