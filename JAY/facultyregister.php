<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="logo.jpg">
    <title>UCOE</title>
	
    
    <link rel="stylesheet" href="stylee.css">
</head>
<?php 
if($_SESSION['success']=='adminlogged')
{
?>
<body>

    <div class="header-w3l">
        <h1>FACULTY REGISTRATION</h1>
    </div>

<div class="main-agileits">
    <h2 class="sub-head">Sign Up</h2>
        <div class="sub-main">  
            <form action="facultyregistered.php" enctype="multipart/form-data" method="post">
             
<input id="yes" name="title" type="radio" value="Mr" required=""> <label for="yes">Mr</label>
  
<input id="no" name="title" type="radio" value="Ms" required=""> <label for="no">Ms</label>

<input id="no" name="title" type="radio" value="Mrs" required=""> <label for="no">Mrs</label>

                
<input placeholder="Name" name="first_name" class="name2" type="text" required="">
                    <br>
                <input placeholder="Phone Number" name="mobile" class="number" type="text" required="">
                    <br>

                    <label for="seen">Branch</label>
 <input id="yes" name="Branch" type="radio" value="Computer" required=""> <label for="yes">Computer</label>
  
   <input id="no" name="Branch" type="radio" value="IT" required=""> <label for="no">IT</label>

 <input id="no" name="Branch" type="radio" value="Civil" required=""> <label for="no">Civil</label>

 <input id="no" name="Branch" type="radio" value="EXTC" required=""> <label for="no">EXTC</label>

 <input id="no" name="Branch" type="radio" value="ETRX" required=""> <label for="no">ETRX</label>


                <input placeholder="Email" name="email" class="mail" type="text" required="">
                    <br>
                <input  placeholder="Password" name="password" class="pass" type="password" required="">
                    <br>
                <input  placeholder="Confirm Password" name="confirm" class="pass" type="password" required="">
                    <br>

                    <input type="file" name="images" value="" /><br>
                <input type="submit" value="submit" name="submit">
            </form>
        </div>
        <div class="clear"></div>
</div>
</body>
</body>
<?php
 }
    else
    {
      header ("location:admin.php");
      }
 ?>
</html>