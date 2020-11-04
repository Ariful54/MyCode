<?php
session_start(); 
$nameError = $emailError=    $unameError = $passwordError =  $cpasswordError = $genderError =  $DOBError = " ";
 $name = $email = $uname = $password = $cpassword =$gender =  $DOB = " ";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if (isset($_POST['submit'])) {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $uname = test_input($_POST["uname"]);
    $password = test_input($_POST["password"]);
    $cpassword = test_input($_POST["cpassword"]);
    $gender = test_input($_POST["gender"]);
    $DOB  = test_input($_POST["DOB"]);
  
   if (empty($name) || !preg_match("/^[a-zA-Z-' ]*$/",$name)) {$nameError = " Name is required!";}
    else {$_SESSION["name"] = $name;}
   if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL ,$email )) { $emailError = " Email is required";} 
    else {$_SESSION["email"] = $email; }
   if (empty($uname)) { $unameError =  " UserName is required";}  else {$_SESSION["uname"] = $uname;}
   if (empty($password)) { $passwordError =  " Password is required";} else {$_SESSION["password"] = $password;}
   if (empty($cpassword)) {$cpasswordError = " Password confirmation is required";} else {$_SESSION["cpassword"] = $cpassword;}
   if (empty($gender)) {$genderError = " Gender is required";} else {$_SESSION["gender"] = $gender;}
   if (empty($DOB)) { $DOBError =  " Dateofbirth is required"; } else {$_SESSION["DOB"] = $DOB;}
  
   }
 
  ?>
