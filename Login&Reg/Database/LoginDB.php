<?php 
//MySQLi Procedural
/*$qry = "CREATE TABLE Users (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) )";
$res = $conn->query($qry);//execute query
if($res){ echo "table created successfully"; }
else{ echo "error occurred create "; }
--------------
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}
$sql = "INSERT INTO Users (firstname, lastname, email) VALUES ('Ariful', 'Islam', 'arif@gmail.com')";
if ($conn->query($sql) === TRUE) {echo "New record created successfully";} 
else {echo "Error: " . $sql . "<br>" . $conn->error;}
$conn->close();*/
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "ariful";
$conn = mysqli_connect($servername, $username, $password,$dbName);//MySQLi Procedural
 
    -------------
    mysqli_close($conn); // close MySQLi Procedural connection object 
    $qry = "CREATE TABLE StaffLogin (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL )";
    $res = $conn->query($qry);//execute query
    if($res){ echo "table created successfully"; }
    else{ echo "error occurred create "; }*/

    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}
$sql = "INSERT INTO stafflogin (username, password) VALUES ('Ariful', '1234')";
if ($conn->query($sql) === TRUE) {echo "New record created successfully";} 
else {echo "Error: " . $sql . "<br>" . $conn->error;}
    $conn->close();
    ?>
