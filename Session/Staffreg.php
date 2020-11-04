<?php
include('control/Regcheck.php');

if(isset($_SESSION['name'])){
header("location: Output.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Staff Registration form</h2>
<form action=" " method="POST" >  
<label for="name">Name:</label>
 <input type="text" id="name" name="name"> <br><br> <?php echo $nameError; ?><br><br>
 <label for="email">Email:</label>
 <input type="text" id="email" name="email"><br><br>
 <label for="uname">User Name:</label>
 <input type="text" id="uname" name="uname"> <br><br>
 <label for="password">Password:</label>
 <input type="password" id="password" name="password"><br><br>
 <label for="cpassword">Confirm Password:</label>
 <input type="password" id="cpassword" name="cpassword"><br><br>
 
 <label for="gender">Gender:</label><br>
 <input type="radio" id="male" name="gender" value="male">
 <label for="male">Male</label><br>
 <input type="radio" id="female" name="gender" value="female">
 <label for="female">Female</label><br>
 <input type="radio" id="other" name="gender" value="other" checked>
 <label for="other">Other</label><br>
 
 <label for="DOB">Date of Birth:</label><br>
 <input type="date" id="DOB" name="DOB" value="DOB" > <br><br>

<input type="submit" name="submit" value="submit"><br>
<input type="reset">
</form>
</body>
</html>