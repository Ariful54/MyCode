<?php
session_start();
if(empty($_SESSION["username"]))
{
  header("location: StaffLogin.php");
}

echo "<h2>Your Input:</h2>";
echo  $_SESSION["fname"];
echo "<br>";
echo  $_SESSION["lname"];
echo "<br>";
echo $_SESSION["email"];
echo "<br>";
echo $_SESSION["uname"];
echo "<br>";
echo $_SESSION["password"];
echo "<br>";
echo $_SESSION["cpassword"];
echo "<br>";
echo $_SESSION["gender"];
echo "<br>";
echo $_SESSION["DOB"] ;
echo "<br>";
?>   
<!DOCTYPE html>
<html>
<body>
<h1> Successfully Registered </h1>
<a href="Home.php">Back to Home</a><br>
<h5>Do you want to <a href="session/logoutcheck.php">logout</a></h5>

</body>
</html>