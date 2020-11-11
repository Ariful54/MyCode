<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "Company";
$conn = mysqli_connect($servername, $username, $password,$dbName);//MySQLi Procedural
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
   // // close MySQLi Procedural connection object 
    $qry = "CREATE TABLE employee (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    empid VARCHAR(30) NOT NULL,
    name VARCHAR(30) NOT NULL,
    DOB VARCHAR(30) NOT NULL,
    address VARCHAR(30) NOT NULL,
    country VARCHAR(30) NOT NULL,
    state VARCHAR(30) NOT NULL,
    city VARCHAR(30) NOT NULL,
    DOBj VARCHAR(30) NOT NULL )";
    $res = $conn->query($qry);//execute query
    if($res){ echo "table created successfully"; }
    else{ echo "error occurred create "; }
    mysqli_close($conn);