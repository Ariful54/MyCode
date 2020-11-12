<?php
class db{
function OpenCon() {
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "ariful";
$conn = new mysqli($servername, $username, $password, $dbname); return $conn;}

function insertUser($conn,$cname,$cid ){
$result=$conn->query("insert into courses ( cname, cid ) values('$cname',$cid )") or die(mysqli_error($conn));
return $result;
echo "<h3>Registration Successful!</h3>";}
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