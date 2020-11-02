<!DOCTYPE html>
<html>
<body>
<?php
$Courseprint = $Sectionprint =" ";
$Course = $Section =" ";
$CourseError = $SectionError =" ";
function test_input($data) { $data = trim($data); $data = stripslashes($data);$data = htmlspecialchars($data);
  return $data;}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  $Course = test_input($_POST["Course"]);
  $Section = test_input($_POST["Section"]);

if (empty($Course) || (!preg_match("/^[a-zA-Z-' ]*$/",$Course)))
 {$CourseError = "Course name is required"; }
 else {$Courseprint= $Course;}
 if (empty($Section) || (!preg_match("/^[a-zA-Z-' ]*$/",$Section)))
 {$SectionError = "Section name is required"; }
 else {$Sectionprint= $Section;}
}
?>
<h1> Welcome to Create a Course and Section </h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >  

<label for="Course">Course Name:</label>
<input type="text" id="Course" name="Course"><?php echo $CourseError; ?><br><br>
<label for="Section">Section Name:</label>
<input type="text" id="Section" name="Section"><?php echo $SectionError; ?><br><br>

<label for="department">Select Department:</label>
<select name="depertment" id="depertment">
<option value="CSE">CSE</option>
<option value="EEE">EEE</option>
<option value="BBA">BBB</option>
</select><br><br>

<input type="submit" name="submit" value="C&S Created">
<input type="reset">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $Courseprint;
echo "<br>";
echo $Sectionprint;
echo "<br>";
?>
<?php include 'footer/footer.php';?>

<a href="home.php">Back to Home</a><br>
</body>
</html>