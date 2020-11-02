<!DOCTYPE html>
<html>
<body>
<?php
$nameprint= $emailprint= $unameprint=  $passwordprint = $cpasswordprint =$genderprint =  $DOBprint = " ";
$name = $email = $uname = $password = $cpassword =$gender =  $DOB = " ";
$nameError = $emailError=    $unameError = $passwordError =  $cpasswordError = $genderError =  $DOBError = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $uname = test_input($_POST["uname"]);
  $password = test_input($_POST["password"]);
  $cpassword = test_input($_POST["cpassword"]);
  $gender = test_input($_POST["gender"]);
  $DOB  = test_input($_POST["DOB"]);

  $target_dir = "files/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }

 if (empty($name) || (!preg_match("/^[a-zA-Z-' ]*$/",$name))) {$nameError = " Name is required"; }
  else {$nameprint= $name;}
 
 if (empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL ,$email ))) { $emailError = " Email is required";} 
  else { $emailprint= $email; }

 if (empty($uname)) { $unameError =  " UserName is required";}  else {$unameprint= $uname;}
 if (empty($password)) { $passwordError =  " Password is required";} else {$passwordprint= $password;}
 if (empty($cpassword)) {$cpasswordError = " Password confirmation is required";} else {$cpasswordprint= $cpassword;}
 if (empty($gender)) {$genderError = " Gender is required";} else {$genderprint= $gender;}
 if (empty($DOB)) { $DOBError =  " Dateofbirth is required"; } else {$DOBprint= $DOB;}

 }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>Staff Registration Information</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"  enctype="multipart/form-data">  
<label for="name">Name:</label>
 <input type="text" id="name" name="name"><?php echo $nameError; ?><br><br>
 <label for="email">Email:</label>
 <input type="text" id="email" name="email"><?php echo $emailError; ?><br><br>
 <label for="uname">User Name:</label>
 <input type="text" id="uname" name="uname"><?php echo $unameError; ?><br><br>
 <label for="password">Password:</label>
 <input type="password" id="password" name="password"><?php echo $passwordError; ?><br><br>
 <label for="cpassword">Confirm Password:</label>
 <input type="password" id="cpassword" name="cpassword"><?php echo $cpasswordError; ?><br><br>
 
 <label for="gender">Gender:</label><?php echo $genderError; ?><br><br>
 <input type="radio" id="male" name="gender" value="male">
 <label for="male">Male</label><br>
 <input type="radio" id="female" name="gender" value="female">
 <label for="female">Female</label><br>
 <input type="radio" id="other" name="gender" value="other" checked>
 <label for="other">Other</label><br><br>
 
 <label for="DOB">Date of Birth:</label><?php echo $DOBError; ?><br><br>
 <input type="date" id="DOB" name="DOB" value="DOB" > <br><br>

 <input type="file" name="fileToUpload" id="fileToUpload"><br>
  
 <input type="submit" value="Submit">
<input type="reset">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $nameprint;
echo "<br>";
echo $emailprint;
echo "<br>";
echo $passwordprint;
echo "<br>";
echo $cpasswordprint;
echo "<br>";
echo $genderprint;
echo "<br>";
echo $DOBprint;
?>
<?php include 'footer/footer.php';?>

<a href="home.php">Back to Home</a><br>
</body>
</html>