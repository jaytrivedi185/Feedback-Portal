<?php
include('database.php');
if (isset($_POST['submit']))
{
$d=$_POST['no'];

$sql = "DELETE FROM student WHERE enroll=$d";
mysqli_select_db($db,'program');
$sql = "DELETE FROM feedback WHERE enroll=$d";

if ($db->query($sql) === TRUE) {
echo "New record created successfully";
header('location:Adminview.php');
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
}
?>

