<?php
session_start(); 
if(empty($_SESSION["cname"])) 
{
header("Location: course.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<body>

<?php 
echo "<h2>Your Input:</h2>";
echo  $_SESSION["cname"];
echo "<br>";
echo  $_SESSION["cid"];
echo "<br>";
?>
<h5>Do you want create <a href="session/logoutcheck.php"> more Course?</a></h5>
<?php include 'footer/footer.php';?>
</body>
</html>