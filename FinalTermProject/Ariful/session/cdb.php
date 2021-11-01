<?php
class cdb{
function OpenCon() {
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "universitymanagement";
$conn = new mysqli($servername, $username, $password, $dbname); return $conn;}



function GetUserByUname($conn,$table, $uname)
{
$result = $conn->query("SELECT * FROM  $table WHERE cname='$uname'");
return $result;
}



function CheckUser($conn,$table,$id)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE id='". $id."'");
return $result;}
    
function UpdateUser($conn,$table,$id,$cname,$cid)
 {
     $sql = "update courses SET cname='" . $cname . "', cid='" . $cid . "'  WHERE id='" . $id . "' ";
    if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
 }    
function insertUser($conn,$cname,$cid ){
    $stmt=$conn->prepare("insert into courses(cname, cid ) values(?,?)") or die(mysqli_error($conn));
    $stmt->bind_param("si",$cname,$cid) or die(mysqli_error($conn));
    $stmt->execute();
    echo "<h3>Created Successful!</h3>";
    $stmt->close();}

function ShowAll($conn,$table) {
    $result = $conn->query("SELECT * FROM  $table ");
    return $result;
    echo "<h3>Course information showed.</h3>";}    
     
function CloseCon($conn)
{ $conn->close();}
}
?>
<?php
/*$conn = mysqli_connect($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}
  $result = $conn->query("SELECT * FROM ". $table." WHERE cname='". $cname."' AND cid='". $cid ."'");
function CheckUser($conn,$table,$username,$password){
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
return $result; }

function CheckUser($conn,$table,$cname,$id){
    $result = $conn->query("SELECT * FROM ". $table." WHERE cname='". $cname."' AND id='". $id."'");
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