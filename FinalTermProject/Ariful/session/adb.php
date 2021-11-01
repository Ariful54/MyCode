<?php
class adb{
function OpenCon() {
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "universitymanagement";
$conn = new mysqli($servername, $username, $password, $dbName); return $conn;}


function insertUser($conn,$cname,$tname,$tid,$sid ){
    $stmt=$conn->prepare("insert into assignecourses(cname,tname,tid,sid ) values(?,?,?,?)") or die(mysqli_error($conn));
    $stmt->bind_param("ssss",$cname,$tname,$tid,$sid) or die(mysqli_error($conn));
    $stmt->execute();
    echo "<h3>Assigned Successful!</h3>";
    $stmt->close();}
function ShowAll($conn,$table) {
    $result = $conn->query("SELECT * FROM  $table ");
    return $result;
    echo "<h3>Teacher information showed.</h3>";}    
function CloseCon($conn)
{ $conn->close();}
}
?>
<?php
/*$conn = mysqli_connect($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}

function CheckUser($conn,$table,$username,$password){
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
return $result; }

function insertUser($conn,$cname,$cid ){
$result=$conn->query("insert into courses ( cname, cid ) values('$cname','$cid' )") or die(mysqli_error($conn));
    return $result;
    echo "<h3>Registration Successful!</h3>";
}
function CloseCon($conn)
 {
 $conn -> close();
 }
} */
?>