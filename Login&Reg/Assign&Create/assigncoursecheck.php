<?php
session_start();
$Course = $Section = $Teacher =" "; $CourseError =$SectionError= $TeacherError= " ";
$_SESSION["Course"]= $_SESSION["Section"]= $_SESSION["Teacher"] = " " ;
 
function test_input($data) { $data = trim($data); $data = stripslashes($data);$data = htmlspecialchars($data);
return $data;}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Course = test_input($_POST["Course"]);
  $Section = test_input($_POST["Section"]);
  $Teacher = test_input($_POST["Teacher"]);

  if (empty($Course) || (!preg_match("/^[a-zA-Z-' ]*$/",$Course)))
  {$CourseError = "Course name is required";}
  else{ $_SESSION["Course"]=$Course; }
 
  if (empty($Section) || (!preg_match("/^[a-zA-Z-' ]*$/",$Section)))
  {$SectionError = "Section name is required";}
  else{ $_SESSION["Section"]=$Section;} }

if (empty($Teacher) || (!preg_match("/^[a-zA-Z-' ]*$/",$Teacher)))
{$TeacherError = "Teacher name is required"; }
else{ $_SESSION["Teacher"]=$Teacher;}

?>