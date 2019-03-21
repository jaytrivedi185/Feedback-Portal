<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<link href="stylee.css" rel="stylesheet" type="text/css" media="all">
<?php 
if($_SESSION['success']=='adminlogged')
{
?>
<head>
	<link rel="icon" href="logo.jpg">
<script type="java.js"></script>
</head>
<body>
    <div class="header-w3l">
        <h1>STUDENT REGISTRATION</h1>
    </div>

<div class="main-agileits">
    <h2 class="sub-head">Sign Up</h2>
        <div class="sub-main">  
            <form action="studentregistered.php" enctype="multipart/form-data" method="post">
             
<input placeholder="Enroll" name="enroll" class="name" type="text" required="">
                    <br>
                
<input placeholder="Name" name="first_name" class="name2" type="text">
                    <br>
                    <div id="name_error"></div>
                <input placeholder="Phone Number" name="mobile" class="number" type="text" required="">
                    <br> 

                    <label for="seen">Branch</label>
 <input id="yes" name="Branch" type="radio" value="Computer" > <label for="yes">Computer</label>
  
   <input id="no" name="Branch" type="radio" value="IT" > <label for="no">IT</label>

 <input id="no" name="Branch" type="radio" value="Civil" > <label for="no">Civil</label>

 <input id="no" name="Branch" type="radio" value="EXTC" > <label for="no">EXTC</label>

 <input id="no" name="Branch" type="radio" value="ETRX" > <label for="no">ETRX</label>


                <input placeholder="Email" name="email" class="mail" type="text" >
                    <br>
                    <div id="email_error"></div>
                <input  placeholder="Password" name="password" class="pass" type="password" >
                    <br>
                <input  placeholder="Confirm Password" name="confirm" class="pass" type="password">
             <br><div id="password_error"></div>

                    <input type="file" name="images" value="" /><br>
                <input type="submit" value="submit" name="submit">
            </form>
        </div>
        <div class="clear"></div>
</div>
</body>



<script type="java.js"></script>
<?php
 }
    else
    {
      header ("location:admin.php");
      }
 ?>
</html>