<?php session_start();?>
<?php 
if($_SESSION['success']=='logged')
{
?>


<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="logo.jpg">
<title>UCOE</title>
<link href="style3.css" rel="stylesheet" type="text/css" media="all">

</head>
<body>

    <div class="header-w3l">
        <h1>Questionnaire</h1>
<h4 style="color:white;">(Excellent-3 Good-2 Moderate-1 Poor-0)</h4>
    </div>

<div class="main-agileits">
   <?php echo "<a href = '$_SESSION[img]'><img src='".$_SESSION['img']."' height='150px' width='150px'></img></a>"; ?>
    
        <div class="sub-main">  
            <form action="form.php" method="post">
<table><tr><td>Enroll:         <?php echo $_SESSION['enroll']; ?></td> 
    <td>Name:         <?php echo $_SESSION['name']; ?></td>
    <td>Date: <?php echo  date("d/m/y"); ?></td>            
    </tr>
     <tr>
     <td>Email:         <?php echo $_SESSION['username']; ?></td>
     <td>Mobile:         <?php echo $_SESSION['mobile']; ?></td>
     <td>Branch:         <?php echo $_SESSION['branch']; ?></td></tr>
 </table>

<h2>1. Did you attain ability to apply knowlege of science,mathematics and Engineering fundamentals appropriate to the domain?</h2>
<label class="container">0 &nbsp&nbsp&nbsp
  <input type="radio" value="0" name="q1" required>
  <span class="checkmark"></span>
</label>
<label class="container">1 &nbsp&nbsp&nbsp
  <input type="radio" value="1" name="q1">
  <span class="checkmark"></span>
</label>
<label class="container">2 &nbsp&nbsp&nbsp
  <input type="radio" value="2" name="q1">
  <span class="checkmark"></span>
</label>
<label class="container">3 &nbsp&nbsp&nbsp
  <input type="radio" value="3" name="q1">
  <span class="checkmark"></span>
</label>

<h2>2. Were you able to use the knowlege of programming languages to design and code software?</h2>
<label class="container">0 &nbsp&nbsp&nbsp
  <input type="radio"  value="0" name="q2" required>
  <span class="checkmark"></span>
</label>
<label class="container">1 &nbsp&nbsp&nbsp
  <input type="radio" value="1" name="q2">
  <span class="checkmark"></span>
</label>
<label class="container">2 &nbsp&nbsp&nbsp
  <input type="radio" value="2" name="q2">
  <span class="checkmark"></span>
</label>
<label class="container">3 &nbsp&nbsp&nbsp
  <input type="radio" value="3" name="q2">
  <span class="checkmark"></span>
</label>

 <h2>3. Did you attain the ability to design a system using modern technologies for commercial use?</h2>                        
<label class="container">0 &nbsp&nbsp&nbsp
  <input type="radio"  value="0" name="q3" required>
  <span class="checkmark"></span>
</label>
<label class="container">1 &nbsp&nbsp&nbsp
  <input type="radio" value="1" name="q3">
  <span class="checkmark"></span>
</label>
<label class="container">2 &nbsp&nbsp&nbsp
  <input type="radio" value="2" name="q3">
  <span class="checkmark"></span>
</label>
<label class="container">3 &nbsp&nbsp&nbsp
  <input type="radio" value="3" name="q3">
  <span class="checkmark"></span>
</label>
 <h2>4. Were you able to use various emerging technologies to solve complex problems?</h2>                      
<label class="container">0 &nbsp&nbsp&nbsp
  <input type="radio" value="0" name="q4" required>
  <span class="checkmark"></span>
</label>
<label class="container">1 &nbsp&nbsp&nbsp
  <input type="radio" value="1" name="q4">
  <span class="checkmark"></span>
</label>
<label class="container">2 &nbsp&nbsp&nbsp
  <input type="radio" value="2" name="q4">
  <span class="checkmark"></span>
</label>
<label class="container">3 &nbsp&nbsp&nbsp
  <input type="radio" value="3" name="q4">
  <span class="checkmark"></span>
</label>

 <h2>5. Were you able to attain multi-disciplinary knowlege so that you could participate in multi-disciplinary activites?</h2>             <label class="container">0 &nbsp&nbsp&nbsp
  <input type="radio" value="0" name="q5" required>
  <span class="checkmark"></span>
</label>
<label class="container">1 &nbsp&nbsp&nbsp
  <input type="radio" value="1" name="q5">
  <span class="checkmark"></span>
</label>
<label class="container">2 &nbsp&nbsp&nbsp
  <input type="radio" value="2" name="q5">
  <span class="checkmark"></span>
</label>
<label class="container">3 &nbsp&nbsp&nbsp
  <input type="radio" value="3" name="q5">
  <span class="checkmark"></span>
</label>        
 

 <h2>6. Were you able to understand ethical and professional responsibility towards the society?</h2>                       
 <label class="container">0 &nbsp&nbsp&nbsp
  <input type="radio" value="0" name="q6" required>
  <span class="checkmark"></span>
</label>
<label class="container">1 &nbsp&nbsp&nbsp
  <input type="radio" value="1" name="q6">
  <span class="checkmark"></span>
</label>
<label class="container">2 &nbsp&nbsp&nbsp
  <input type="radio" value="2" name="q6">
  <span class="checkmark"></span>
</label>
<label class="container">3 &nbsp&nbsp&nbsp
  <input type="radio" value="3" name="q6">
  <span class="checkmark"></span>
</label>

 <h2>7. Were you able to work as a team to complete a major product of your interest?</h2>                      
        <label class="container">0 &nbsp&nbsp&nbsp
  <input type="radio"  value="0" name="q7" required> 
  <span class="checkmark"></span>
</label>
<label class="container">1 &nbsp&nbsp&nbsp
  <input type="radio" value="1" name="q7">
  <span class="checkmark"></span>
</label>
<label class="container">2 &nbsp&nbsp&nbsp
  <input type="radio" value="2" name="q7">
  <span class="checkmark"></span>
</label>
<label class="container">3 &nbsp&nbsp&nbsp
  <input type="radio" value="3" name="q7">
  <span class="checkmark"></span>
</label>
<br>
                
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="clear"></div>
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







