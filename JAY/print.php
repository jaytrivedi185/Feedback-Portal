<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>UCOE</title>
<head>
    <link rel="icon" href="logo.jpg">
<style>


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
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    margin-left: 40%;
    font-size: 16px;
    margin-top: 20px;
    cursor: pointer;
}

</style>
</head>

<?php 
if($_SESSION['success']=='facultylogged')
{
?>
<body>

<ul>


<li style="float:left;"><a href="facultypage.php">Feedback</a></li>



<li style="float:right;"><a href="home.php">Log out</a></li>
</ul>



<form action="formprint.php" method="post">
<input type="text" name="no" class = "search" placeholder="enroll"></input><br>
<button class="button" type="submit" name = "submit" >SUBMIT</button>
</form>


</body>
<?php
 }
    else
    {
      header ("location:faculty.php");
      }
 ?>
</html>
