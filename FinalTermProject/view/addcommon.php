<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<?php



$name= $email = $gender = $username = $password =$cpassword=$date= "";
$notname=$notlname=$notemail=$notGender=$notusername=$notpass=$notcpass=$notdate="";
$valid=true;



if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
  $username=test_input(($_POST["username"]));
  $password=test_input(($_POST["pass"]));
  $cpassword=test_input(($_POST["cpass"]));
  $date=test_input(($_POST["dob"]));
  

  
  




  if(empty($name) || !preg_match("/^[a-zA-Z-' ]*$/",$name))
  {
    $notname="please enter your name";
    $valid=false;
  }
  
  if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    $notemail="please enter your email";
    $valid=false;
  }
  if(empty($username)|| !preg_match("/^[(0-9)+a-zA-Z-' ]*$/",$username))
  {
    $notusername="please enter user name";
    $valid=false;
  }

  if(empty($password))
  {
    $notpass="please enter password";
    $valid=false;
  }
  if(empty($cpassword))
  {
    $notcpass="please  enter confirm password";
    $valid=false;
  }

  if(empty($date))
  {
    $notdate="please enter dtae of birth";
    $valid=false;
  }

  


  
  
}

function test_input($data) {
  
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>


  







    <label style="margin-left:100px;  font-size:20px" for=""> Name  </label>

    <label style="margin-left:140px;  font-size:20px" for=""> :</label>
    <input style=" height:20px; width:200px" type="text" name="name" id="name" placeholder="name" > <?php echo $notname;  ?>
    
    <!--<hr style="margin-left:400px; margin-:400px;">-->
    <hr>


    <label style="margin-left:100px;  font-size:20px" for="">Email</label>
    

    <label style="margin-left:140px; font-size:20px" for=""> :</label>
    <input style=" height:20px; width:200px" type="text" name="email" id="email"
      placeholder="badhon1512@gmail.com"> <?php echo $notemail;  ?>
    
    <hr>


    <label style="margin-left:100px;  font-size:20px" for="">User Id </label>
    <label style="margin-left:130px; color:maroon; font-size:20px" for=""> :</label>
    <input style=" height:20px; width:200px" type="text" name="username" id="cemail" placeholder="badhon1512" > <?php echo $notusername;  ?>
    
    <hr>



    <label style="margin-left:100px;  font-size:20px" for="">Password </label>

    <label style="margin-left:115px; color:maroon; font-size:20px" for=""> :</label>
    
    <input style=" height:20px; width:200px" type="password" name="pass" id="pass" placeholder="*****" > <?php echo $notpass;  ?>
    
    <hr>


    <label style="margin-left:100px;  font-size:20px" for="">Confirm Password  </label>
    <label style="margin-left:40px; color:maroon; font-size:20px" for=""> :</label>
    <input style=" height:20px; width:200px" type="password" name="cpass" id="cpass" placeholder="*******" > <?php echo $notcpass;  ?>
    <br>
    <hr>

    

    <fieldset style=" margin-left:100px;">
    <legend   >Gender</legend>

    <input  value="male" style="margin-left:40px;" type="radio" name="gender" id="male" >

<label for="">Male</label>

<input value="Female" style="margin-left:40px;" type="radio" name="gender" id="female" >

<label for="">Female</label>


<input style="margin-left:40px;" type="radio" name="gender" id="other" checked>

<label for="">Other</label> <?php echo $notGender;  ?>
    </fieldset>
   
    <br>
    <hr>   
<fieldset style=" margin-left:100px;">
  <legend >Date of Birth</legend>
    
    <input style="margin-left:40px; height:20px; width:200px" type="date" name="dob" id="date" > <?php echo $notdate;  ?>

    </fieldset>
    





</body>

</html>