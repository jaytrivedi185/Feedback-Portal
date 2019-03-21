<?php
session_start();
session_unset(); 
session_destroy(); 
?>





<!DOCTYPE html>
<html>
<title>UCOE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head><link rel="icon" href="logo.jpg"></head>

<style>
body,h1 {font-family: "Raleway", Arial, sans-serif}
h1 {letter-spacing: 6px}

h1.title{
  text-align:center;
}

.dec{
  border: 30px;
}

a{
  text-decoration: none;
}

table{
border: 1px solid #ddd;
width: 30%;
}
td{
    border: 1px solid #ddd;
    padding: 8px;
    background-color: white;
text-align: center;
}
a:hover{
  color:red;
}
a:link {
    color:black;
}

a:visited {
    color: black;
}
a:active {
    color: red;
}

</style>






<body id="example1">


<div class="content">


<header class="header" style="padding:128px 16px">
  <h1 class="title">Universal College Of Engineering</h1>
  <h1 class="title">PROGRAM EXIT FORM</h1>
  
  
    <table align="center">
	<h3 align="center">Login As</h3>
     <tr>
      <td><a href="admin.php">Admin</a></td>
      <td><a href="student.php">Student</a></td>
      <td><a href="faculty.php">Faculty</a></td>
      <td><a href="principal.php">Principal</a></td>
    </tr>
    </table>
  </div>
</header>


</body>
</html>
