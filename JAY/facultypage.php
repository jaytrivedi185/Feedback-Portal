<?php
session_start();
include('database.php');

$username="";
$password="";
?>


<?php 
if($_SESSION['success']=='facultylogged')
{
	
?>
<!DOCTYPE html>
<html>
<title>UCOE</title>
<head>
    <link rel="icon" href="logo.jpg">
<style>
table{
padding-top:50px;
width: 90%;
}
td,th {
    border: 1px solid #ddd;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}
th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
.image{
   margin-left: 650px;

}

a.link:link, a.link:visited {
  background-color:#4CAF50;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-top:20px;
}


a.link:hover, a.link:active {
  background-color: red;
}
</style>
</head>
<body>

<ul>
  <li>
   <a href="print.php">Print</a> 
  </li>

<li>
   <a href="Graph.html">Graph</a> 
  </li>

<li style="float:right;"><a href="home.php">Log out</a></li>
</ul>

<img src="<?= $_SESSION['img'] ?>" height="200px" width="200px" class="image">
<p align="center">Name:     <?php echo $_SESSION['name']; ?><br>  
Branch:         <?php echo $_SESSION['branch']; ?><br>
Username:       <?php echo $_SESSION['username']; ?><br>
</p>

<?php

$username = $_SESSION['user'];
$password = $_SESSION['pass'];


$query = "SELECT * FROM faculty WHERE username='$username' AND password ='$password'";
$result = mysqli_query($db, $query);
while($row=mysqli_fetch_assoc($result)){
$_SESSION['branch']=$row['branch'];             
$_SESSION['name']=$row['name'];
$_SESSION['img']=$row['img'];
    }

mysqli_select_db($db,'feedback');

$query = "SELECT * FROM feedback"; 
$result = mysqli_query($db, $query);
echo "<table align='center'>"; 
echo "<th>Name</th><th>Branch</th><th>Enroll</th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th><th>Q5</th><th>Q6</th><th>Q7</th>";
while($row = mysqli_fetch_array($result)){  
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['Branch'] . "</td><td>" . $row['Enroll'] . "</td><td>" . $row['q1'] . "</td><td>" . $row['q2'] . "</td><td>" . $row['q3'] . "</td><td>" . $row['q4'] . "</td><td>" . $row['q5'] . "</td><td>" . $row['q6'] . "</td><td>" . $row['q7'] . "</td></tr>";  
}

echo "</table>";

$query1 = "SELECT * FROM feedback"; 
$result = mysqli_query($db, $query1);
$count = mysqli_num_rows($result);
$cou=$count/5;

?>


</body>
<?php 
   }
    else
    {
      header ("location:faculty.php");
      }
 ?>
</html>
