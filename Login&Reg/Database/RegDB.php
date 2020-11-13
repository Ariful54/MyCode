<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "ariful";
$conn = mysqli_connect($servername, $username, $password,$dbName);//MySQLi Procedural
 
//mysqli_close($conn); // close MySQLi Procedural connection object 
 $qry = "CREATE TABLE StaffReg (id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fname VARCHAR(30) NOT NULL,
lname VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
cpassword VARCHAR(30) NOT NULL,
gender VARCHAR(30) NOT NULL,
DOB VARCHAR(30) NOT NULL  )";
 $res = $conn->query($qry);//execute query
    if($res){ echo "table created successfully"; }
    else{ echo "error occurred create "; }
  
?>