<?php
session_start();
include('database.php');

$a=$_SESSION['name'];
$b=$_SESSION['branch'];
$c=$_SESSION['enroll'];
$d=$_POST['q1'];
$e=$_POST['q2'];
$f=$_POST['q3'];
$g=$_POST['q4'];
$h=$_POST['q5'];
$i=$_POST['q6'];
$j=$_POST['q7'];

$_SESSION['d']=$_POST['q1'];
$_SESSION['e']=$_POST['q2'];
$_SESSION['f']=$_POST['q3'];
$_SESSION['g']=$_POST['q4'];
$_SESSION['h']=$_POST['q5'];
$_SESSION['i']=$_POST['q6'];
$_SESSION['j']=$_POST['q7'];
?>






<html>
<head>
  <link rel="icon" href="logo.jpg">
<title>FEEDBACK FORM</title> 
<style>
table, td, th
{
border:3px solid black;
border-collapse:collapse;
}
h1
{
background-color:LavenderBlush ;
}
body
{
background-color:MistyRose ;
color:MidnightBlue;
}
h3
{
color:Sienna;
}
table {
    width: 50%;
}

th {
    height: 50px;
}
td
{
text-align:center;
vertical-align:center;
}
h6
{
display:blcok;
}
.button {
  border-radius: 4px;
  background-color: black;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 10px;
  width: 100px;
  cursor: pointer;
  margin: 5px;
  margin-left:45%;
}
</style>
</head>
<body>
<h3 align = "center"> DEPARTMENT</h3>
<h3 align="center"><i>ONLINE FEEDBACK FORM</i></h3>

<pre align ="center">Thank you for your feedback.The information will be valuable to improve the quality of education provided.</pre>
<table style="width:60%" align="center">
  <tr>
    <th colspan="2">Personal Information</th>
 
  </tr>
  <tr>
    <td>Student's Name</td>
    <td><?php echo $a; ?></td>
   
  </tr>
  <tr>
    <td>Enroll</td>
    <td><?php echo $c; ?></td>
   
  </tr>
  <tr>
    <td>Branch</td>
	<td><?php echo $b; ?></td>
    
   
  </tr>
  <tr>
  <td>Date</td>
  <td><?php echo  date("d/m/y"); ?></td>
</table>




<div style = "display :block; padding-left: 50px; padding-right: 50px; margin-top: 100px;">
<h5 >1. Did you attain ability to apply knowlege of science,mathematics and Engineering fundamentals appropriate to the domain? &nbsp <?php echo $d; ?>
<hr><br>

2. Were you able to use the knowlege of programming languages to design and code software? 
<?php echo $e; ?>
<hr>  <br>                      

3. Did you attain the ability to design a system using modern technologies for commercial use?   
<?php echo $f; ?>
<hr><br>

4. Were you able to use various emerging technologies to solve complex problems?         
<?php echo $g; ?>
<hr><br>

5. Were you able to attain multi-disciplinary knowlege so that you could participate in 
   multi-disciplinary activites?                                                        
<?php echo $h; ?>
<hr><br>

6. Were you able to understand ethical and professional responsibility towards the society? 
<?php echo $i; ?>
<hr><br>      

7. Were you able to work as a team to complete a major product of your interest?
<?php echo $j; ?>

</div>
<form action="saved.php" method="post"><button  type="submit" name="submit" class="button" >Confirm</button></form>
</body></html>
                                               