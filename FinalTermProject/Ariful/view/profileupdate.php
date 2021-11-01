<?php
session_start(); 
//include('../dbControler/db.php');
include('../session/pupdatecheck.php');
include('../session/pdb.php');
//include('../dbControler/supdatecheck.php');
//include('../session/loginsession.php');

/*
if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: StaffLogin.php"); // Redirecting To Home Page
}
*/
?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br/>Your Profile Page.

<?php
$connection = new pdb();
$conobj=$connection->OpenCon();
$userQuery=$connection->CheckUser($conobj,"staff", $_SESSION["username"]);

if ($userQuery->num_rows > 0) {
    echo "<form action='' method='post'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
     // echo "userid : <input type='text' name='userid' value=".$row["userid"]." > <br>";
      echo "email : <input type='text' name='email' value=".$row["email"]." ><br>";
     
    }
    echo   "<input name='update' type='submit' value='Update'>";
  } else {
    echo "0 results";
  }



?>





<a href="../session/logoutcheck.php">logout</a>

</body>
</html>