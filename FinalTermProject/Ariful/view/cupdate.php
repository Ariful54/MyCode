
<!DOCTYPE html>
<html>
<script src="../js/myscript.js"></script>

<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
<div class="sticky">

<div class="header">
 <h2>Course Updated Form</h2> 
</div>
<div class="topnav">
 <a href="../session/logoutcheck.php"> Back to home</a>

</div>
</div>

<div class="column">


<form action=" " method='post' onsubmit="return validateFormID()">
  <Label>ID:</label><?php// echo $error;?> 
  <input type="text" id="id" name="id" ><br><h4 id="iderror"></h4> 
  <input type="submit" name="idsubmit" id="Button" value="Submit">
  </form>

<?php


include('../session/cdb.php');
include('../session/cupdatecheck.php');

if (isset($_POST['idsubmit'])) {
$id=$_POST["id"];

 $connection = new cdb();
$conobj=$connection->OpenCon();
$userQuery=$connection->CheckUser($conobj,"courses",$id);


if ($userQuery->num_rows > 0) {
    echo "<form action='' method='post' onsubmit='return validateForm6()'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
     echo "Id : <input type='text' name='id'  value=".$row["id"]." readonly ><br>";
     echo "Course name : <input type='text' name='cname'  value=".$row["cname"]." ><h4 id='cnameerror'></h4>$cnameError<br>";
     echo "Course id : <input type='text' name='cid'  value=".$row["cid"]."><h4 id='ciderror'</h4>$cidError<br>";
    }
    echo   "<input name='update' class=button type='submit' value='Update'>";
    echo " </form>" ;
    

  } else {
    echo "<p id='para2'>Please give a valid ID to Update the data !</p>";
  }
}

?>



<h2>Course Information Table</h2>
<?php

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
<div class="footer">
<p>Footer</p>
</div>

</html>

