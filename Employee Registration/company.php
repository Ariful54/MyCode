<?php
include('companycheck.php');

if(isset($_SESSION['empid'])){
header("location: output.php");
}

?>
<!DOCTYPE html>
<html>
<body>



<h2>Employee Registration Form</h2>
<form action="  " method="POST" enctype="multipart/form-data" >

<label for="empid">Employee id:</label>
 <input type="text" id="empid" name="empid"><?php echo $empidError; ?><br><br>
 <label for="name"> Name:</label>
 <input type="text" id="name" name="name"><?php echo $nameError; ?><br><br>
 <label for="DOB">Date of Birth:</label>
 <input type="date" id="DOB" name="DOB" value="DOB" > <?php echo $DOBError; ?><br><br>

 <label for="address">address:</label>
 <input type="text" id="address" name="address"><?php echo $addressError; ?><br><br>
 <label for="country">Country Name:</label>
 <input type="text" id="country" name="country"><?php echo $countryError; ?><br><br>
 <label for="state">State:</label>
 <input type="text" id="state" name="state"><?php echo $stateError; ?><br><br>
 <label for="city">city:</label>
 <input type="text" id="city" name="city"><?php echo $cityError; ?><br><br>
 <label for="DOBj">Date of Birth joining:</label>
 <input type="date" id="DOBj" name="DOBj" value="DOBj" > <?php echo $DOBjError; ?><br><br>

 <input type="file" name="fileToUpload" id="fileToUpload"><br><br>

 <input name="submit" type="submit" value="Submit">



</form>

</body>
</html>