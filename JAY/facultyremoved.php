<?php
include('database.php');
if (isset($_POST['submit']))
{

$d=$_POST['no'];

$sql = "DELETE FROM faculty WHERE name='$d'";

if ($db ->query($sql) === TRUE) {
    echo "New record created successfully";
header('location:Adminview.php');
} else {
    echo "Error: " . $sql . "<br>" . $db_connect->error;
}
}
?>


