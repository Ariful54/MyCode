<?php
session_start(); 
if(empty($_SESSION["cname"])) 
{
header("Location: course.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<script src="../js/jQuery.js"></script>
<?php
$cookie_name = "Staff";
$cookie_value = $_SESSION["cname"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<body>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
<div class="sticky">

<div class="header">
 <h2>Successfully Created Course Information</h2> 
</div>
<div class="topnav">
 <a href="../session/logoutcheck.php"> Back to home</a>

</div>
</div>

<div class="column">
<?php 
echo "<h2>Your Input:</h2>";

echo  $_SESSION["cname"];
echo "<br>";
echo  $_SESSION["cid"];
echo "<br>";
?>
<br>
<br>
<div class="Cookies">
  <?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "<h2>Cookie:</h2>";
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>  

</div>

<form action="" method="POST">
<input type="submit" name="submit" id="Button" value="Destroy Cookie?">
</form>
 
<?php
if (isset($_POST['submit'])) {
  // set the expiration date to one hour ago
setcookie("Staff", "", time() - 3600);
}
?>




<h2 id = "togglepage"> Course Information Table</h2>
<div id = "HideSearch">
<?php
include('../session/cdb.php');
$connection = new cdb();
$conn=$connection->OpenCon();
$userQuery=$connection->ShowAll($conn,"Courses");  
echo "<table border='1'> <tr><th>id</th><th>cname</th> <th>cid</th></tr>";

if($userQuery->num_rows > 0){
    while($row=$userQuery->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['cname'] . "</td>";
    echo "<td>" . $row['cid'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    }
    ?>  
</div>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="footer">
<p>Footer</p>
</div>
</body>
</html>
