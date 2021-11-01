<?php
session_start(); 
if(empty($_SESSION["cname"])) 
{
header("Location: assign.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
<div class="sticky">

<div class="header">
 <h2>Successfully Assigned Teacher and Student</h2> 
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
echo  $_SESSION["tname"];
echo "<br>";
echo  $_SESSION["tid"];
echo "<br>";
echo  $_SESSION["sid"];
echo "<br>";
?>

<h2>Teacher assigned Information Table</h2>
<?php
include('../session/adb.php');
$connection = new adb();
$conn=$connection->OpenCon();
$userQuery=$connection->ShowAll($conn,"assignecourses");  

echo "<table border='1'>
<tr>
<th>id</th>
<th>cname</th>
<th>tname</th>
<th>tid</th>
<th>sid</th>
</tr>";

if($userQuery->num_rows > 0){
    while($row=$userQuery->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['cname'] . "</td>";
    echo "<td>" . $row['tname'] . "</td>";
    echo "<td>" . $row['tid'] . "</td>";
    echo "<td>" . $row['sid'] . "</td>";
    //echo "<td>" "<a href = delete.php?id=$row[id]> Delete " "</td>" ;
    echo "</tr>";
    }
    echo "</table>"; //$conn->close(); //mysqli_close($conn);
    } ?>  

<div class="footer">
<p>Footer</p>
</div>
</body>
</html>
