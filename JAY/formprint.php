<?php
session_start();
include('database.php');

if (isset($_POST['submit']))
{
	$enroll=$_POST['no'];
 $query1 = "SELECT * FROM student WHERE Enroll='$enroll'";
      $results1 = mysqli_query($db , $query1);
while($row=mysqli_fetch_assoc($results1)){
             $a=$row['mobile'];
             $b=$row['enroll'];
             $c=$row['name'];
             $d=$row['branch'];
         }

 $query = "SELECT * FROM feedback WHERE Enroll='$enroll'";
      $results = mysqli_query($db , $query);
      if (mysqli_num_rows($results) == 1) 
      
     while($row=mysqli_fetch_assoc($results)){
             $e=$row['q1'];
             $f=$row['q2'];
             $g=$row['q3'];
             $h=$row['q4'];
             $i=$row['q5'];
             $j=$row['q6'];
             $k=$row['q7'];

     }
}
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

</style>
</head>
<body>
  <button style="margin-left:750px;" onClick="window.print()">Print</button>
<h3 align = "center"> DEPARTMENT</h3>
<h3 align="center"><i>ONLINE FEEDBACK FORM</i></h3>

<pre align ="center">Thank you for your feedback.The information will be valuable to improve the quality of education provided.</pre>
<table style="width:60%" align="center">
  <tr>
    <th colspan="2">Personal Information</th>
 
  </tr>
  <tr>
    <td>Student's Name</td>
    <td><?php echo $b; ?></td>
   
  </tr>
  <tr>
    <td>Enroll</td>
    <td><?php echo $c; ?></td>
   
  </tr>
  <tr>
    <td>Branch</td>
	<td><?php echo $d; ?></td>
    
   
  </tr>
  <tr>
  <td>Mobile</td>
  <td><?php echo $a; ?></td>
</table>



<h3 align = "center">For each question you have to rank the subject teacher from 1 to 5</h6>
<p align="center"><b>(1-Sufficient 2-Moderate 3-Good 4-High 5-Excellent)</b></p>
<p align="center"><b><u>QUESTIONNAIRE</u></b></p>
<div style = "display :block; padding-left: 50px">
<h5 >1. Did you attain ability to apply knowlege of science,mathematics and Engineering fundamentals appropriate to the domain? &nbsp<br><?php echo $e; ?>
<hr><br><br>

2. Were you able to use the knowlege of programming languages to design and code software? 
<br><?php echo $f; ?>
<hr><br><br>                      

3. Did you attain the ability to design a system using modern technologies for commercial use?   
<br><?php echo $g; ?>
<hr><br><br>

4. Were you able to use various emerging technologies to solve complex problems?         
<br><?php echo $h; ?>
<hr><br><br>

5. Were you able to attain multi-disciplinary knowlege so that you could participate in 
   multi-disciplinary activites?                                                        
<br><?php echo $i; ?>
<hr><br><br>

6. Were you able to understand ethical and professional responsibility towards the society? 
<br><?php echo $j; ?>
<hr><br><br>      

7. Were you able to work as a team to complete a major product of your interest?
<br><?php echo $k; ?>

</div>

</body>
</html>
