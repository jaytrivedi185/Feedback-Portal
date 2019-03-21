<?php include('studentupdated.php')?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UCOE</title>
<link rel="icon" href="logo.jpg">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tooplate.css">
</head>
?>
<?php 
if($_SESSION['success']=='adminlogged')
{
?>

<h3 style="color: white; padding-left: 320px;">STUDENT FACULTY</h3>
<body id="register">
    <div class="container">
        <div class="row tm-register-row">
            <p style="color: white; padding-left:50px;">NOTE: &nbsp;First enter Enroll to Update other details</p>
                <form action="studentupdated.php" method="post">
                 <div class="input-field">
                        <input placeholder="Enroll no" id="first_name" name="enroll" type="text" class="validate">
                    </div>

                 <div class="input-field">
                        <input placeholder="Full Name" id="first_name" name="first_name" type="text" class="validate">
                    </div>
                    
                    <div class="input-field">
                        <input placeholder="Mobile" id="mobile" name="mobile" type="tel" class="validate">
                    </div>
			
		
		<div class="mb-2">
<div class="input-field"><label>Branch</label><br></div>
                        <label class="mr-4">
                            <input class="with-gap" name="Branch" type="radio" value="Computer"></input>
                            <span>Computer</span>
                        </label>

                        <label class="mr-4">
                            <input class="with-gap" name="Branch" type="radio" value="It"></input>
                            <span>IT</span>
                        </label>

                        <label class="mr-4">
                            <input class="with-gap" name="Branch" type="radio" value="civil"></input>
                            <span>Civil</span>
                        </label>
                        <label class="mr-4">
                            <input class="with-gap" name="Branch" type="radio" value="extc"></input>
                            <span>Extc</span>
                        </label>
                        <label>
                            <input class="with-gap" name="Branch" type="radio" value="etrx"></input>
                            <span>Etrx</span>
                        </label>
                    </div>
                 <div class="input-field">
                        <input placeholder="Email" id="email" name="email" type="text" class="validate">
                    </div>
<div class="input-field">
                        <input placeholder="Password" id="password" name="password" type="password" class="validate">
                    </div>
<div class="input-field">
                        <input placeholder="Confirm Password" id="confirm" name="confirm" type="password" class="validate">
                    </div>   
               	<div class="text-right mt-4">
                        <button type="submit" name = "submit" class="waves-effect btn-large btn-large-white px-4 black-text">SUBMIT</button>
                    </div>
                </form>
            </div>
            
        
    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>


<?php
 }
    else
    {
      header ("location:admin.php");
      }
 ?>
</html>