<!DOCTYPE html>
<html>
<head>
</head>
<body>



<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
<form action="loginaction/Result.php" method="get">
<label >Name:</label>
 <input type="text" id="name" name="name"><br>

 <input type="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>