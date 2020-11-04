<?php
session_start(); 
if(empty($_SESSION["name"]))
{
header("Location: Staffreg.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "<h2>Your Input:</h2>";
echo $_SESSION["nameError"];
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
 <h5>Do you want to <a href="control/logout.php">logout</a></h5>
</body>
</html>
