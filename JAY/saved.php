<?php
session_start();
include('database.php');

if (isset($_POST['submit']))
{

$a=$_SESSION['name'];
$b=$_SESSION['branch'];
$c=$_SESSION['enroll'];
$d=$_SESSION['d'];
$e=$_SESSION['e'];
$f=$_SESSION['f'];
$g=$_SESSION['g'];
$h=$_SESSION['h'];
$i=$_SESSION['i'];
$j=$_SESSION['j'];

$sql = "INSERT INTO feedback(name,Branch,Enroll,q1,q2,q3,q4,q5,q6,q7)
VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";

if ($db ->query($sql) === TRUE) {
    echo "New record created successfully";
	header('location:Marks.php');
} else {
    echo "Error: " . $sql . "<br>" . $db_connect->error;
}
}
?>

