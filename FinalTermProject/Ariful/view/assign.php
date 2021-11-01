<?php
include('../session/assigncheck.php');


if(isset($_SESSION['cname'])){
header("location: assigned.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<script src="../js/myscript.js"></script>

<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
<div class="sticky">
<div class="header">
<h2>Teacher and Student Assigned Form</h2>
</div>

<div class="topnav">
<a href="Home.php">Back to Home</a><br>
</div>
</div>

<div class="column">
<form action="  " method="POST"  onsubmit="return validateForm1()" >
<label for="cname">Course name:</label>
 <input type="text" id="cname" name="cname"> <h4 id="cnameerror"></h4><?php// echo $cnameError; ?><br>
 <label for="tname">Teacher name:</label>
 <input type="text" id="tname" name="tname"><h4 id="tnameerror"></h4> <?php //echo $tnameError; ?><br>
 <label for="tid"> Teacher id:</label>
 <input type="text" id="tid" name="tid"> <h4 id="tiderror"></h4><?php //echo $tidError; ?><br>
 <label for="sid"> Student id:</label>
 <input type="text" id="sid" name="sid"><h4 id="siderror"></h4> <?php// echo $sidError; ?><br>
 <input name="submit" class=button type="submit" value="Submit">

</form>
<h4><p id="para1">Course Information Table</p></h4><?php
include('../session/cdb.php');
$connection = new cdb();
$conn=$connection->OpenCon();
$userQuery=$connection->ShowAll($conn,"Courses");  
echo "<table border='1'> <tr><th>cname</th> <th>cid</th></tr>";

if($userQuery->num_rows > 0){
    while($row=$userQuery->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>" . $row['cname'] . "</td>";
    echo "<td>" . $row['cid'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    }
    ?>  
<h4><p id="para1">Teacher Information Table</p></h4><?php
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
<h4><p id="para1">Student Information Table</p></h4><?php
include('../session/sdb.php');
$connection = new sdb();
$conn=$connection->OpenCon();
$userQuery=$connection->ShowAll($conn,"students");  

echo "<table border='1'>
<tr>
<th>userid</th>
<th>username</th>
<th>email</th>
<th>gender</th>
<th>userpassword</th>
<th>dateofbirth</th>
<th>depertment</th>
<th>cgpa</th>
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
    echo "<td>" . $row['cgpa'] . "</td>";
    echo "<td>" . $row['activestatus'] . "</td>";
    echo "</tr>";
    }
    echo "</table>"; 
    } ?>  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>

<div class="footer">
<p>Footer</p>
</div>
</body>
</html>


