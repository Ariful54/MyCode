<?php
class db{
function OpenCon(){
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "Company";
$conn = mysqli_connect($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}

/*function CheckUser($conn,$table,$username,$password){
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
return $result; }*/

function insertUser($conn,$empid, $name,$DOB, $address, $country , $state , $city,  $DOBj ){
$result=$conn->query("insert into employee(empid, name,DOB, address, country , state , city,  DOBj ) values('$empid','$name','$DOB','$address','$country','$state','$city','$DOBj')") or die(mysqli_error($conn));
    return $result;
    echo "<h3>Registration Successful!</h3>";
}
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>