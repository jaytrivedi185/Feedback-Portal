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

      $query = "SELECT * FROM faculty WHERE username='$username' AND password ='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
     while($row=mysqli_fetch_assoc($results)){
            $_SESSION['user'] = $row['username'];
            $_SESSION['pass'] = $row['password'];
             $_SESSION['mobile']=$row['mobie'];
             $_SESSION['enroll']=$row['enroll'];
             $_SESSION['name']=$row['name'];
             $_SESSION['branch']=$row['branch'];
             $_SESSION['img']=$row['img'];
        }
        $_SESSION['success'] = "facultylogged";
        header('location: facultypage.php');
      }else {
        array_push($errors, "Wrong username/password combination");
      }
    }
  }
  ?>
