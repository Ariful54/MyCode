<?php
include('adb.php');
session_start(); 
$cname = $tname= $tid = $sid = " "; 
$cnameError = $tnameError= $tidError= $sidError=" ";

function test_input($data) {$data = trim($data);$data = stripslashes($data);$data = htmlspecialchars($data);
return $data; }

if(isset($_POST["submit"])){
$cname = test_input($_POST["cname"]);
$tname = test_input($_POST["tname"]);
$tid = test_input($_POST["tid"]);
$sid = test_input($_POST["sid"]);


if ( empty($_POST['cname']) || empty($_POST['tname']) || empty($_POST['tid']) || empty($_POST['sid']) ) {
   $cnameError = "name is required!";$tnameError = "Teacher name is required!";
    $tidError = "teacher id is required!"; $sidError = "student id is required!";} else{

$cname = $_POST['cname'];
$tname = $_POST['tname'];
$tid = $_POST['tid'];
$sid = $_POST['sid'];


$connection = new adb();
$conn=$connection->OpenCon();
$userQuery=$connection->insertUser($conn,$cname,$tname,$tid,$sid  );

$_SESSION["cname"]=$cname;
$_SESSION["tname"]=$tname;
$_SESSION["tid"]=$tid;
$_SESSION["sid"]=$sid;

}
}

?>