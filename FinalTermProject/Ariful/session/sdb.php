<?php
class sdb{
function OpenCon() {
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "universitymanagement";
$conn = new mysqli($servername, $username, $password, $dbname); return $conn;}



function insertUser($conn,$sname,$sid ){
    $result=$conn->query("insert into student ( sname, sid ) values('$sname',$sid )") or die(mysqli_error($conn));
    return $result;
    echo "<h3>Create Successful!</h3>";}

function ShowAll($conn,$table) {
    $result = $conn->query("SELECT * FROM  $table ");
    return $result;
    echo "<h3>Student information showed.</h3>";}    

function CloseCon($conn)
{ $conn->close();}
}
?>
