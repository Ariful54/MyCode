<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universitymanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE assignecourses  (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  cname VARCHAR(30) NOT NULL, 
  tname VARCHAR(30) NOT NULL,
  tid VARCHAR(10) NOT NULL,
  sid VARCHAR(30) NOT NULL )";
  $res = $conn->query($sql);//execute query
  if($res){ echo "table created successfully"; }
  else{ echo "error occurred create "; } 

// sql to create table
$sql = "CREATE TABLE courses (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
cname VARCHAR(30) NOT NULL,
cid VARCHAR(30) NOT NULL )";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();


   /* 


$sql = "CREATE TABLE students (
  userid VARCHAR(30)  PRIMARY KEY,
  username VARCHAR(30) NOT NULL,
  email VARCHAR(30) NOT NULL,
  gender VARCHAR(30) NOT NULL,
  userpassword VARCHAR(30) NOT NULL,
  dateofbirth VARCHAR(30) NOT NULL,
  depertment VARCHAR(30)NOT NULL,
  cgpa INT(6) NOT NULL,
  activestatus VARCHAR(30) NOT NULL )";
     if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();

   // sql to create table
$sql = "CREATE TABLE faculty (
  userid VARCHAR(30)  PRIMARY KEY,
  username VARCHAR(30) NOT NULL,
  email VARCHAR(30) NOT NULL,
  gender VARCHAR(30) NOT NULL,
  userpassword VARCHAR(30) NOT NULL,
  dateofbirth VARCHAR(30) NOT NULL,
  depertment VARCHAR(30)NOT NULL,
  salary INT(6) NOT NULL,
  activestatus VARCHAR(30) NOT NULL )";
     if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    



  $qry = "CREATE TABLE student (
  sid INT(6)  PRIMARY KEY,
   sname VARCHAR(30) NOT NULL )";
   $res = $conn->query($qry);//execute query
   if($res){ echo "table created successfully"; }
   else{ echo "error occurred create "; }

   $qry = "CREATE TABLE teacher (
   tname VARCHAR(30) NOT NULL,
   tid VARCHAR(30) PRIMARY KEY )";
   $res = $conn->query($qry);//execute query
   if($res){ echo "table created successfully"; }
  else{ echo "error occurred create "; }
   
   
   
    ?>