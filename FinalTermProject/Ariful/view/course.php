<?php
include('../session/coursecheck.php');
if(isset($_SESSION['cname'])){
    header("location: created.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<script src="../js/myscript.js"></script>
<script src="../js/jQuery.js"></script>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">

<div class="sticky">
<div class="header">
 <h2>Course created Form</h2> 
</div>

<div class="topnav">
<a href="Home.php">Back to Home</a><br>
</div>
</div>

<div class="column">

<form action="  " method="POST" onsubmit="return validateForm()" >

<label>Course name:</label>
 <input type="text" id="cname" name="cname"><h4 id="cnameerror"></h4>  <?php // echo $cnameError;?>

 <label> Course id:</label>
 <input type="text" id="cid" name="cid"> <h4 id="ciderror"></h4><?php //echo $cidError; ?> 

 <input name="submit"  id="Button" type="submit" value="Submit">
 </form>
</div>

<div class="footer">
<p>Footer</p>
</div>

</html>
