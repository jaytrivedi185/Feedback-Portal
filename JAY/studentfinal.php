<?php
session_start();
include('database.php');

if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {


      
      $query = "SELECT * FROM student WHERE username='$username' AND password ='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
     while($row=mysqli_fetch_assoc($results)){
             $_SESSION['mobile']=$row['mobile'];
             $_SESSION['enroll']=$row['enroll'];
             $_SESSION['name']=$row['name'];
             $_SESSION['branch']=$row['branch'];
             $_SESSION['img']=$row['img'];

     }
$student=$_SESSION['enroll'];
$sql1 ="SELECT * FROM feedback WHERE Enroll ='$student'";
$result = mysqli_query($db, $sql1);
if(mysqli_num_rows($result) == 0)
{
  $_SESSION['success'] = "logged";
  header('location: survey.php');
}
else
{$_SESSION['success'] = "logged";
  $_SESSION['studentlog']=$student;
  header('location:marks.php');
}
}


      else {
        array_push($errors, "Wrong username/password combination");
      }
    }
  }
  ?>
