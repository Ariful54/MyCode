<?php
class regdb{
function OpenCon(){
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "ariful";
$conn = mysqli_connect($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}        
function insertUser($conn,$fname, $lname, $email, $username, $password ,$cpassword , $gender, $DOB)
{
$result=$conn->query("insert into StaffReg(fname,lname,email,password,cpassword,gender,DOB) values('$fname','$lname','$email','$password','$cpassword','$gender','$profession','$DOB')") or die(mysqli_error($conn));
return $result;
echo "<h3>Registration Successful!</h3>";}
function CloseCon($conn)
{ $conn -> close(); }
}
 //'$fname','$lname','$email','$password','$cpassword','$gender','$profession','$DOB'
       //'$_SESSION["fname"]','$_SESSION["lname"]','$_SESSION["email"]','$_SESSION["uname"]','$_SESSION["password"]','$_SESSION["cpassword"]','$_SESSION["gender"]',' $_SESSION["DOB"])
        //$_SESSION["fname"],$_SESSION["lname"],$_SESSION["email"],$_SESSION["uname"],$_SESSION["password"],$_SESSION["cpassword"],$_SESSION["gender"], $_SESSION["DOB"]);
?>
