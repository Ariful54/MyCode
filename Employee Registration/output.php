<?php
session_start(); 
if(empty($_SESSION["empid"])) 
{
header("Location: company.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<body>

<?php 
echo "<h2>Your Input:</h2>";
echo  $_SESSION["empid"];
echo "<br>";
echo  $_SESSION["name"];
echo "<br>";
echo $_SESSION["DOB"];
echo "<br>";
echo $_SESSION["address"];
echo "<br>";
echo $_SESSION["country"];
echo "<br>";
echo $_SESSION["state"];
echo "<br>";
echo $_SESSION["city"];
echo "<br>";
echo $_SESSION["DOBj"] ;
echo "<br>";


?>
<a href="company.php">Back to REG</a><br>
<h5>Do you want to <a href="logoutcheck.php">logout</a></h5>
</body>
</html>