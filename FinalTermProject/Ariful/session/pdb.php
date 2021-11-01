<?php
class pdb{
function OpenCon(){
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "universitymanagement";
$conn = mysqli_connect($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}

function CheckUser($conn,$table,$username)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND userpassword='". $password."'");
return $result;
}



function UpdateUser($conn,$table,$username,$email)
{
    $sql = "update $table SET email='$email' WHERE username='$username'";

   if ($conn->query($sql) === TRUE) {
       $result= "Record updated successfully";
   } else {
       $result= "Error updating record: " ;
   }
   return $result;
}

/*
function insertUser($conn,$fname, $lname, $email, $username, $password ,$cpassword , $gender, $DOB){
$result=$conn->query("insert into StaffReg(fname,lname,email,username,password,cpassword,gender,DOB) values('$fname','$lname','$email','$username','$password','$cpassword','$gender','$DOB')") or die(mysqli_error($conn));
    return $result;
    echo "<h3>Registration Successful!</h3>";}*/
    
function ShowAll($conn,$table) {
    $result = $conn->query("SELECT * FROM  $table ");
    return $result;
    echo "<h3>Staff information showed.</h3>";}  
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>