<?php
include('database.php');

if (isset($_POST['submit']))
{
	echo "Done";
	$file_name= $_FILES['image']['name'];
	$file_type= $_FILES['image']['type'];
	$file_size= $_FILES['image']['size'];
	$file_tem_loc= $_FILES['image']['tmp_name'];
	$file_store="images/".$file_name;

	if(move_uploaded_file($file_tem_loc, $file_store))
	{

		$sql="insert into img(img)
		values('$file_name')";
	}
	if ($db->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
}
?>

<span><img src="<?= $file_store ?>" height="100px" width="100px"></span>