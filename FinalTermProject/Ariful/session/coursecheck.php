<?php
include('cdb.php');
session_start(); 
$cname = $cid =  " "; 
$cnameError = $cidError=" ";

function test_input($data) {$data = trim($data);$data = stripslashes($data);$data = htmlspecialchars($data);
return $data; }

if(isset($_POST["submit"])){
  
$cname = test_input($_POST["cname"]);
$cid = test_input($_POST["cid"]);


if ( (empty($_POST['cname'])) || (empty($_POST['cid'])) ) {
  $cnameError = "cname is required!"; $cidError = "cid is required!";}
    else{

$cname = $_POST['cname'];
$cid = $_POST['cid'];


$connection = new cdb();
$conn=$connection->OpenCon();
$userQuery=$connection->insertUser($conn,$cname,$cid );

$_SESSION["cname"]=$cname;
$_SESSION["cid"]=$cid;
}}
?>