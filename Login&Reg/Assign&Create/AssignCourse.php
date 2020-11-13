<?php
include('session/assigncoursecheck.php');

if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: StaffLogin.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<body>
<h1> Welcome to assign a teacher for  Course and Section </h1>
<form action=" " method="POST" >
<label for="Course">Course Name:</label>
<input type="text" id="Course" name="Course"><?php echo $CourseError; ?><br><br>
<label for="Section">Section Name:</label>
<input type="text" id="Section" name="Section"><?php echo $SectionError; ?><br><br>
<label for="Teacher">Teacher Name:</label>
<input type="text" id="Teacher" name="Teacher"><?php echo $TeacherError; ?><br><br>

<input type="submit" name="submit" value="TeacherAssigned">
<input type="reset">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $_SESSION["Course"];
echo "<br>";
echo $_SESSION["Section"]; 
echo "<br>";
echo $_SESSION["Teacher"]; 
echo "<br>";
echo "<br>"; echo "<br>"; include 'footer/footer.php';?>

<a href="Home.php">Back to Home</a><br>
<h5>Do you want to <a href="session/logoutcheck.php">logout</a></h5>
</body>
</html>
