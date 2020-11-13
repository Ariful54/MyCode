<?php
include('session/regcheck.php');
/*
if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: StaffLogin.php"); // Redirecting To Home Page
}*/

if(isset($_SESSION['fname'])){
header("location: Registered.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>Staff Registration Form</h2>
<form action=" " method="POST" >
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

<?php 
/*
echo "<h2>Your Input:</h2>";
echo  $_SESSION["fname"];
echo "<br>";
echo  $_SESSION["lname"];
echo "<br>";
echo $_SESSION["email"];
echo "<br>";
echo $_SESSION["username"];
echo "<br>";
echo $_SESSION["password"];
echo "<br>";
echo $_SESSION["cpassword"];
echo "<br>";
echo $_SESSION["gender"];
echo "<br>";
echo $_SESSION["DOB"] ;
echo "<br>";

*/
include 'footer/footer.php';?>

<a href="Home.php">Back to Home</a><br>
<h5>Do you want to <a href="session/logoutcheck.php">logout</a></h5>
</body>
</html>

////////////////
<?php
include('regdb.php'); 
session_start(); 

$fname= $lname= $email= $username= $password = $cpassword = $gender=  $DOB = " ";
$fnameError= $lnameError= $emailError=  $usernameError=  $passwordError =  $cpasswordError = $genderError=  $DOBError= " ";
//$_SESSION["fname"]=$_SESSION["lname"]=$_SESSION["email"]=$_SESSION["uname"]=$_SESSION["password"]=$_SESSION["cpassword"]=$_SESSION["gender"]= $_SESSION["DOB"] =" ";

/*function test_input($data) {$data = trim($data);$data = stripslashes($data);$data = htmlspecialchars($data);
return $data; }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$fname = test_input($_POST["fname"]);
$lname = test_input($_POST["lname"]);
$email = test_input($_POST["email"]);
$username = test_input($_POST["username"]);
$password = test_input($_POST["password"]);
$cpassword = test_input($_POST["cpassword"]);
$gender = test_input($_POST["gender"]);
$DOB  = test_input($_POST["DOB"]);

if ((empty($fname) || !preg_match("/^[a-zA-Z-' ]*$/",$fname))
||(empty($lname) || !preg_match("/^[a-zA-Z-' ]*$/",$lname))
||(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL ,$email ))
||empty($uname) ||empty($password) ||empty($cpassword) ||empty($gender) ||empty($DOB) )*/
if(isset($_POST["submit"])){
if ((empty($_POST['fname'])) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['fname'])) || (empty($_POST['lname'])) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['lname'])) || 
(empty($_POST['email'])) || (!filter_var($email, FILTER_VALIDATE_EMAIL ,$_POST['email'] )) || (empty($_POST['username']))|| 
(empty($_POST['password'])) ||(empty($_POST['cpassword'])) ||(empty($_POST['gender'])) ||(empty($_POST['DOB'])) )
 {
    $fnameError = "First name is required!";$lnameError = "Last name is required!";
    $emailError = " Email is required"; $usernameError =  " UserName is required";
    $passwordError =  " Password is required";$cpasswordError = " Password confirmation is required";
    $genderError = " Gender is required";$DOBError =  " Dateofbirth is required";
}
else{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$gender = $_POST['gender'];
$DOB  = $_POST['DOB'];

$connection = new regdb();
$conobj=$connection->OpenCon();
$userQuery=$connection->insertUser($connobj,$fname, $lname, $email, $username, $password ,$cpassword , $gender, $DOB);

$_SESSION["fname"]=$fname;
$_SESSION["lname"]=$lname;
$_SESSION["email"]=$email;
$_SESSION["username"]=$username;
$_SESSION["password"]=$password;
$_SESSION["cpassword"]=$cpassword;
$_SESSION["gender"]=$gender;
$_SESSION["DOB"] =$DOB ;

$connection->CloseCon($conobj);

}
}


/*{$fnameError = "First name is required!";}
else {$_SESSION["fname"] = $fname;}
if (empty($lname) || !preg_match("/^[a-zA-Z-' ]*$/",$lname)) {$lnameError = "Last name is required!";}
else {$_SESSION["lname"] = $lname;}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL ,$email )) { $emailError = " Email is required";} 
else {$_SESSION["email"] = $email;}
if (empty($uname)) { $unameError =  " UserName is required";} 
 else {$_SESSION["uname"] = $uname;}
if (empty($password)) { $passwordError =  " Password is required";}
 else {$_SESSION["password"] = $password;}
if (empty($cpassword)) {$cpasswordError = " Password confirmation is required";} 
else {$_SESSION["cpassword"] = $cpassword;}
if (empty($gender)) {$genderError = " Gender is required";}
 else{$_SESSION["gender"] = $gender;}
if (empty($DOB)) { $DOBError =  " Dateofbirth is required"; }
 else {$_SESSION["DOB"] = $DOB;}


$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";}
else {  echo "Sorry, there was an error uploading your file."; } 
*/
?>




