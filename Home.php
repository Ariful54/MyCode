<?php
//session_start(); if(empty($_SESSION["username"])){header("location: ../login.php");}
?>
<!DOCTYPE html>
<html>
<body>
<h1> Welcome to Staff </h1>
<a href="course.php"> Create Courses </a><br><br><br>
<a href="assign.php"> Assign Courses </a><br><br><br>
<a href="profile.php"> My Profile </a><br><br><br>
<?php include 'footer/footer.php';?>
</body>
</html>