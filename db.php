<?php

$sname= "localhost";
$unmae= "brian";
$password = "1738";

$db_name = "admin_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}