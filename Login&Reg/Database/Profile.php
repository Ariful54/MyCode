<!DOCTYPE html>
<html>
<body>
<?php
$fnameprint= $lnameprint= $emailprint= $usernameprint= $genderprint=  $DOBprint= " ";
$fname= $lname= $email= $username= $gender=  $DOB = " ";
$fnameError= $lnameError= $emailError=  $usernameError=  $genderError=  $DOBError= " ";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $email = test_input($_POST["email"]);
  $username = test_input($_POST["username"]);
  $gender = test_input($_POST["gender"]);
  $DOB  = test_input($_POST["DOB"]);

 if (empty($fname) || (!preg_match("/^[a-zA-Z-' ]*$/",$fname))) {$fnameError = " First Name is required !"; }
  else {$fnameprint= $fname;}
if (empty($lname) || (!preg_match("/^[a-zA-Z-' ]*$/",$lname))) {$lnameError = "Last Name is required !"; }
  else {$lnameprint= $lname;}
 if (empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL ,$email ))) { $emailError = " Email is required !";} 
  else { $emailprint= $email; }

 if (empty($username)) { $usernameError =  " User Name is required !";}  else {$usernameprint= $username;}
 if (empty($gender)) {$genderError = " Gender is required !";} else {$genderprint= $gender;}
 if (empty($DOB)) { $DOBError =  " Dateofbirth is required !"; } else {$DOBprint= $DOB;}
 }
 function test_input($data) {$data = trim($data);$data = stripslashes($data); $data = htmlspecialchars($data);
  return $data;}

?>
<h2>Staff Profile</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"  >  
<label for="fname">First Name:</label>
 <input type="text" id="fname" name="fname"><?php echo $fnameError; ?><br><br>
 <label for="lname">Last Name:</label>
 <input type="text" id="lname" name="lname"><?php echo $lnameError; ?><br><br>
 <label for="email">Email:</label>
 <input type="text" id="email" name="email"><?php echo $emailError; ?><br><br>
 <label for="username">User Name:</label>
 <input type="text" id="username" name="username"><?php echo $usernameError; ?><br><br>
 
 <label for="gender">Gender:</label><?php echo $genderError; ?><br><br>
 <input type="radio" id="male" name="gender" value="male">
 <label for="male">Male</label><br>
 <input type="radio" id="female" name="gender" value="female">
 <label for="female">Female</label><br>
 <input type="radio" id="other" name="gender" value="other" checked>
 <label for="other">Other</label><br><br>
 
 <label for="DOB">Date of Birth:</label><?php echo $DOBError; ?><br><br>
 <input type="date" id="DOB" name="DOB" value="DOB" > <br><br>

  
 <input type="submit" value="Submit">
<input type="reset">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $fnameprint;
echo "<br>";
echo $lnameprint;
echo "<br>";
echo $emailprint;
echo "<br>";
echo $usernameprint;
echo "<br>";
echo $genderprint;
echo "<br>";
echo $DOBprint;
?>
<?php include 'footer/footer.php';?>

<a href="Home.php">Back to Home</a><br>
</body>
</html>