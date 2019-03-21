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
<style>
table{
padding-top: 120px;
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

.search{
    margin-top: 20px;
    margin-left: 40%;
    padding: 20px;
}
.remove{
    margin-top: 20px;
    margin-left: 40%;
    padding: 20px;
    color: 
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
<link rel="icon" href="logo.jpg">
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



<li style="float:right;"><a href="home.html">Log out</a></li>
</ul>





<?php

mysqli_select_db($db,'program');

$query = "SELECT * FROM faculty"; 
$result = mysqli_query($db, $query);

echo "<table align='center'>"; 
echo "<th>MR/MRS</th><th>Name</th><th>Mobile</th><th>Branch</th><th>Username</th><th>Password</th>";
while($row = mysqli_fetch_array($result)){   
echo "<tr><td>" . $row['mr'] . "</td><td>" . $row['name'] . "</td><td>" . $row['mobie'] . "</td><td>" . $row['branch'] . "</td><td>" . $row['username'] . "</td><td>" . $row['password'] . "</td></tr>";  
}

echo "</table>"; 
$query1 = "SELECT * FROM faculty"; 
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



