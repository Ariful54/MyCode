

<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
<div class="sticky">

<div class="header">
<h2>Teacher Information Table</h2>
</div>

<div class="topnav">
<a href="Home.php">Back to Home</a><br>
</div>
</div>

<div class="column">
<?php
include('../session/tdb.php');
$connection = new tdb();
$conn=$connection->OpenCon();
$userQuery=$connection->ShowAll($conn,"faculty");  

echo "<table border='1'>
<tr>
<th>userid</th>
<th>username</th>
<th>email</th>
<th>gender</th>
<th>userpassword</th>
<th>dateofbirth</th>
<th>depertment</th>
<th>salary</th>
<th>activestatus</th>
</tr>";

if($userQuery->num_rows > 0){
    while($row=$userQuery->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>" . $row['userid'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['userpassword'] . "</td>";
    echo "<td>" . $row['dateofbirth'] . "</td>";
    echo "<td>" . $row['depertment'] . "</td>";
    echo "<td>" . $row['salary'] . "</td>";
    echo "<td>" . $row['activestatus'] . "</td>";
    echo "</tr>";
    }
    echo "</table>"; 
    } ?>  


<div class="footer">
<p>Footer</p>
</div>
</body>
</html>

