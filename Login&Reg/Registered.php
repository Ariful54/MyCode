<?php
session_start(); 
if(empty($_SESSION["fname"])) 
{
header("Location: StaffReg.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<body>

<?php 
echo "<h2>Your Input:</h2>";
echo  $_SESSION["fname"];
echo "<br>";
echo  $_SESSION["lname"];
echo "<br>";
echo $_SESSION["email"];
echo "<br>";
echo $_SESSION["username"];
echo "<br>";
echo $_SESSION["password"];
echo "<br>";
echo $_SESSION["cpassword"];
echo "<br>";
echo $_SESSION["gender"];
echo "<br>";
echo $_SESSION["DOB"] ;
echo "<br>";

 include 'footer/footer.php';?>

<a href="Account.php">Back to Account</a><br>
<h5>Do you want to <a href="session/logoutcheck.php">logout</a></h5>
</body>
</html>

