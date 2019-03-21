<?php

$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="program";


$username = "";
$email    = "";
$branch   = "";
$errors = array();



$db = mysqli_connect('localhost', 'root', '', 'program');
if (mysqli_connect_error())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
	echo "";
}

?>