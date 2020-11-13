<?php
session_start();
$Course = $Section = " "; $CourseError = $SectionError= " ";
 $_SESSION["Course"]= $_SESSION["Section"]=" " ;


function test_input($data) { $data = trim($data); $data = stripslashes($data);$data = htmlspecialchars($data);
  return $data;}
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Course = test_input($_POST["Course"]);
    $Section = test_input($_POST["Section"]);
    

  if (empty($Course) || (!preg_match("/^[a-zA-Z-' ]*$/",$Course)))
  {$CourseError = "Course name is required";
   }
  else{ $_SESSION["Course"]=$Course; }
 
  if (empty($Section) || (!preg_match("/^[a-zA-Z-' ]*$/",$Section)))
  {$SectionError = "Section name is required";
  }
  else{ $_SESSION["Section"]=$Section;} 
}

?>