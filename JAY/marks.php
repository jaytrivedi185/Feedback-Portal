<?php session_start(); 
include('database.php');
$student=$_SESSION['enroll'];
$sql1 ="SELECT * FROM feedback WHERE Enroll ='$student'";
$result = mysqli_query($db, $sql1);
while($row=mysqli_fetch_assoc($result)){
             $_SESSION['enroll']=$row['Enroll'];
             $_SESSION['name']=$row['name'];
             $_SESSION['branch']=$row['Branch'];
             $_SESSION['q1']=$row['q1'];
             $_SESSION['q2']=$row['q2'];
             $_SESSION['q3']=$row['q3'];
             $_SESSION['q4']=$row['q4'];
             $_SESSION['q5']=$row['q5'];
             $_SESSION['q6']=$row['q6'];
             $_SESSION['q7']=$row['q7'];
         }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="logo.jpg">
    <title>UCOE</title>
</style>
</head>
<?php 
if($_SESSION['success']=='logged')
{
?>
<body>

    <div class="header-w3l">
        <a href="Home.php">Log out</a>
        <h1>THANK YOU!!</h1>
    </div>

<div class="main-agileits">
    <h2 class="sub-head">Your Feedback</h2>
        <div class="sub-main">  
            <p align="left">1. Did you attain ability to apply knowlege of science,mathematics and Engineering fundamentals appropriate to the domain? &nbsp<br></p>
            <P align="left">&nbsp&nbsp&nbsp Ans.<?php echo $_SESSION['q1']; ?></P>
			<hr>

            <p align="left">2. Were you able to use the knowlege of programming languages to design and code software?</p>
			<P align="left">&nbsp&nbsp&nbsp Ans.<?php echo $_SESSION['q2']; ?></P>	
			<hr>

			<p align="left">3. Did you attain the ability to design a system using modern technologies for commercial use?</p>
			<P align="left">&nbsp&nbsp&nbsp Ans.<?php echo $_SESSION['q3']; ?></P>
			<hr>
			
			<p align="left">4. Were you able to use various emerging technologies to solve complex problems?</p>
			<P align="left">&nbsp&nbsp&nbsp Ans.<?php echo $_SESSION['q4']; ?></P>
			<hr>
			
			<p align="left">5. Were you able to attain multi-disciplinary knowlege so that you could participate in 
   			multi-disciplinary activites? </p>
			<P align="left">&nbsp&nbsp&nbsp Ans.<?php echo $_SESSION['q5']; ?></P>	
			<hr>
			
			<p align="left">6. Were you able to understand ethical and professional responsibility towards the society?</p>  
			<P align="left">&nbsp&nbsp&nbsp Ans.<?php echo $_SESSION['q6']; ?></P>	
			<hr>
			
			<p align="left">7. Were you able to work as a team to complete a major product of your interest? </p>
			<P align="left">&nbsp&nbsp&nbsp Ans.<?php echo $_SESSION['q7']; ?></P>	
			<hr>
			
        </div>
</body>
<?php
 }
    else
    {
      header ("location:student.php");
      }
 ?>
</html>