<?php
session_start();
include('database.php');
?>
<?php 
if($_SESSION['success']=='adminlogged')
{
?>
<!DOCTYPE html>
<html>
<title>UCOE</title>
<head>
    <link rel="icon" href="logo.jpg">
<style>
table{
padding-top: 40px;
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

</style>
</head>
<body>

<ul>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Student</a>
    <div class="dropdown-content">
      <a href="studentregister.php">ADD</a>
      <a href="Studentupdate.php">Update</a>
    <a href="studentremove.php">Remove</a>
    <a href="studentdetails.php">View</a>
    </div>
  </li>

<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Faculty</a>
    <div class="dropdown-content">
      <a href="facultyregister.php">ADD</a>
      <a href="facultyupdate.php">Update</a>
    <a href="facultyremove.php">Remove</a>
    <a href="facultydetail.php">View</a>
    </div>
  </li>

<li style="float:left;"><a href="Adminview.php">Feedback</a></li>



<li style="float:right;"><a href="home.php">Log out</a></li>
</ul>

<h3 align="center">NAME:         <?php echo $_SESSION['name']; ?></h3>
<h3 align="center">Email:        <?php echo $_SESSION['username']; ?></h3>
<?php

mysqli_select_db($db,'program');


$query = "SELECT * FROM feedback";
$result = mysqli_query($db, $query);

echo "<table align='center'>"; 
echo "<th>Name</th><th>Branch</th><th>Enroll</th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th><th>Q5</th><th>Q6</th><th>Q7</th>";
while($row = mysqli_fetch_array($result)){   
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['Branch'] . "</td><td>" . $row['Enroll'] . "</td><td>" . $row['q1'] . "</td><td>" . $row['q2'] . "</td><td>" . $row['q3'] . "</td><td>" . $row['q4'] . "</td><td>" . $row['q5'] . "</td><td>" . $row['q6'] . "</td><td>" . $row['q7'] . "</td></tr>";  }

echo "</table>"; 



$query1 = "SELECT * FROM feedback"; 
$result = mysqli_query($db, $query1);
$count = mysqli_num_rows($result);
$cou=$count/5;


$cou=ceil($cou);
?>
</body>

<?php
 }
    else
    {
      header ("location:principal.php");
      }
 ?>
</html>
