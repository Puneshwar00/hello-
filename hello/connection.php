<?php

$connection = mysqli_connect("localhost","root","");
if(!$connection)
	echo "connection failed";


$db  = mysqli_select_db($connection, "trial");

if(!$db)
	echo "database selection failed";




?>