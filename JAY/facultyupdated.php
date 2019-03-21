<?php
include('database.php');
         if(isset($_POST['submit'])) {
           

            
            $name= $_POST['first_name'];
            $title = $_POST['title'];
             $mobile = $_POST['mobile'];
              $branch = $_POST['Branch'];
               $email = $_POST['email'];
                $password = $_POST['password'];

            mysqli_select_db($db ,'program');
            $sql = "UPDATE faculty ". "SET mr='$title', mobie='$mobile', branch='$branch', username='$email', password='$password' ". 
               "WHERE name = '$name'" ;
                     
           if ($db ->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:Adminview.php');
}
else {
    echo "Error: " . $sql . "<br>" . $db_connect->error;
}}
?>
