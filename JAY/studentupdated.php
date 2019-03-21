<?php

include('database.php');

         if(isset($_POST['submit'])) {
           

            
            $enroll= $_POST['enroll'];
            $fname = $_POST['first_name'];
             $mobile = $_POST['mobile'];
              $branch = $_POST['Branch'];
               $email = $_POST['email'];
                $password = $_POST['password'];

            mysqli_select_db($db,'program');
            $sql = "UPDATE student ". "SET name='$fname', mobile='$mobile', branch='$branch', username='$email', password='$password' ". 
               "WHERE enroll = '$enroll'" ;
                     
           if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:Adminview.php');
}
else {
    echo "Error: " . $sql . "<br>" . $db->error;
}}
?>
