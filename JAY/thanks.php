?>
<?php 
if($_SESSION['success']=='logged')
{
?>



hello Student
<html>
<body><a href = "home.html">LOG OUT</a></body>
</html>

<?php
 }
    else
    {
      header ("location:student.php");
      }
 ?>