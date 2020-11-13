<?php
include('session/regcheck.php');

if(isset($_SESSION['fname'])){
header("location: Registered.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>Staff Registration Form</h2>
<form action="  " method="POST" >

<label for="fname">First Name:</label>
 <input type="text" id="fname" name="fname"><?php echo $fnameError; ?><br><br>
 <label for="lname">Last Name:</label>
 <input type="text" id="lname" name="lname"><?php echo $lnameError; ?><br><br>
 <label for="email">Email:</label>
 <input type="text" id="email" name="email"><?php echo $emailError; ?><br><br>
 <label for="username">User Name:</label>
 <input type="text" id="username" name="username"><?php echo $usernameError; ?><br><br>
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

  
 <input name="submit" type="submit" value="Submit">
<input type="reset">
</form>

<?php include 'footer/footer.php';?>

<a href="Account.php">Back to Account</a><br>
</body>
</html>