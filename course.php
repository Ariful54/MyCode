<?php
include('session/coursecheck.php');

if(isset($_SESSION['cname'])){
header("location: created.php");
}

?>
<!DOCTYPE html>
<html>
<body>

<h2>Course created Form</h2>
<form action="  " method="POST"  >
<label for="cname">Course name:</label>
 <input type="text" id="cname" name="cname"><?php echo $cnameError; ?><br><br>
 <label for="cid"> Course id:</label>
 <input type="text" id="cid" name="cid"><?php echo $cidError; ?><br><br>
 <input name="submit" type="submit" value="Submit">

</form>
<?php include 'footer/footer.php';?>
<a href="Home.php">Back to Home</a><br>
</body>
</html>