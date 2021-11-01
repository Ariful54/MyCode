<?php
   include('..\session\loginsession.php');

   if(isset($_SESSION["type"]))
   {
    if($_SESSION["type"]=="admin")
    {
      header("location: adminhome.php");
    }
    else if($_SESSION["type"]=="staff")
    {
      header("location: ../Ariful/view/Home.php");
    }
    else if($_SESSION["type"]=="faculty")
    {
      header("location: ../Roy/view/profile.php");
    }
    else if($_SESSION["type"]=="student")
    {
     // header("location: );
    }
    else{
      $error="Invalid username or password";
    }
     
   }



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <link rel="stylesheet" href="../css/login.css">
</head>
<?php



?>
<body  >


  <form action="" method="POST">

   <input id="id" type="text" placeholder="username" name="username"> <?php echo $usernameerror; ?>
   <br>

   <input type="password" placeholder="password" name="password"> <?php echo $passworderror; ?>
   <br>

   <input id="button" type="submit" name="submit" value="LogIn" >

   

  </form>

  <?php

   echo $error;

  ?>



  
  
</body>
</html>