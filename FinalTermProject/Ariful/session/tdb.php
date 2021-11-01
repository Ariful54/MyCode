<?php
class tdb{
function OpenCon() {
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "universitymanagement";
$conn = new mysqli($servername, $username, $password, $dbname); return $conn;}


/*function insertUser($conn,$tname,$tid ){
    $result=$conn->query("insert into teacher ( tname, tid ) values('$tname',$tid )") or die(mysqli_error($conn));
    return $result;
    echo "<h3>Store Successfully!</h3>";} 
function ShowAll($conn,$table) {
    $result = $conn->query("SELECT * FROM  $table ");
    return $result;
    echo "<h3>Teacher information showed.</h3>";}   */ 
    
    function ShowAll($conn,$table){
        $result = $conn->query("SELECT * FROM  $table");
        return $result; }
function CloseCon($conn)
{ $conn->close();}
    }
?>
