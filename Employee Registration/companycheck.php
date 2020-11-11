<?php
include('db.php');
session_start(); 
$empid= $name= $DOB= $address= $country = $state = $city=  $DOBj = " ";
$empidError= $nameError= $DOBError= $addressError= $countryError = $stateError = $cityError=  $DOBjError = " ";

function test_input($data) {$data = trim($data);$data = stripslashes($data);$data = htmlspecialchars($data);
return $data; }

if(isset($_POST["submit"])){
$empid = test_input($_POST["empid"]);
$name = test_input($_POST["name"]);
$DOB  = test_input($_POST["DOB"]);
$address = test_input($_POST["address"]);
$country = test_input($_POST["country"]);
$state = test_input($_POST["state"]);
$city = test_input($_POST["city"]);
$DOBj = test_input($_POST["DOBj"]);


$f= 'basename';
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";}
else {  echo "Sorry, there was an error uploading your file."; } 

if ((empty($_POST['empid'])) || (empty($_POST['name'])) || (empty($_POST['DOB'])) ||
(empty($_POST['address'])) || (empty($_POST['country']))|| 
(empty($_POST['state'])) ||(empty($_POST['city'])) ||(empty($_POST['DOBj'])) 
 )
 {
    $empidError = "id is required!";$nameError = "name is required!";$DOBError =  " Dateofbirth is required";
    $addressError = " address is required"; $countryError =  " country is required";
    $stateError = " state is required";$citydError = " city is required";
    $DOBjError = " date pf joining is required";
} else{

$empid = $_POST['empid'];
$name = $_POST['name'];
$DOB  = $_POST['DOB'];
$address = $_POST['address'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$DOBj = $_POST['DOBj'];

$connection = new db();
$conn=$connection->OpenCon();
$userQuery=$connection->insertUser($conn,$empid, $name, $DOB, $address, $country, $state ,$city, $DOBj );

$_SESSION["empid"]=$empid;
$_SESSION["name"]=$name;
$_SESSION["DOB"] =$DOB ;
$_SESSION["address"]=$address;
$_SESSION["country"]=$country;
$_SESSION["state"]=$state;
$_SESSION["city"]=$city;
$_SESSION["DOBj"]=$DOBj;



}
}
/*$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";}
else {  echo "Sorry, there was an error uploading your file."; } 
*/

?>