<?php 
$host = "localhost";
$user = "root";
$pass = "Star@dve4ture";
$db = "admission";
 
$con = mysqli_connect($host,$user,$pass, $db);
if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
	echo "Failed to connect to MySQL: " . $con->connect_error;
	exit();
}
 ?>