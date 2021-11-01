<?php
session_start(); 
 $cname = $cid = ""; 
$cnameError = $cidError="";
if (isset($_POST['update'])) {


   if ( (empty($_POST['cname'])) || (empty($_POST['cid'])) ) {
   $cnameError = "cname is required!"; $cidError = "cid is required!";}
   
   
   else{
  $cname = $_POST['cname'];
  $_SESSION["cname"]=$cname;

  $cid = $_POST['cid'];
  $_SESSION["cid"]=$cid;


   $id=$_POST['id'];
   $_SESSION['id']=$id;


$connection = new cdb();
$conobj=$connection->OpenCon();
$userQuery=$connection->UpdateUser($conobj,"courses",$_SESSION["id"],$cname,$cid);

echo $userQuery;
$connection->CloseCon($conobj);

}
}
?>

