
<?php
session_start();
include('database.php');
if (isset($_POST['submit']))
{

	$file_name= $_FILES["images"]["name"];
	$file_tem_loc= $_FILES["images"]["tmp_name"];
	$file_store="img/".$file_name;
	$file_type= $_FILES["images"]["type"];
	$file_size= $_FILES["images"]["size"];

	move_uploaded_file($file_tem_loc, $file_store);

$b=$_POST['enroll'];
$c=$_POST['first_name'];
$d=$_POST['mobile'];
$e=$_POST['Branch'];
$f=$_POST['email'];
$g=$_POST['password'];
$h=$_POST['confirm'];

$user=mysqli_real_escape_string($db, $_POST['enroll']);
$sql1 ="SELECT enroll FROM student WHERE enroll='$user'";
$results = mysqli_query($db, $sql1);
if(mysqli_num_rows($results) == 0)
{
$sql = "INSERT INTO student(enroll,name,mobile,branch,username,password,confirm,img)
VALUES ('$b','$c','$d','$e','$f','$g','$h','$file_store')";
if ($db ->query($sql) === TRUE) {
echo "New record created successfully";
header('location:Adminview.php');
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
	
}
else{
	$_SESSION['already']='student';
	$_SESSION['enroll'] = $b;
	header('location:Already.php');
}

}
?>

