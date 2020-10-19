<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<style>
.one {
    float: left;
    width: 100px; 
    text-align: right;
    padding-right: 15px;
    }
hr{
    margin-top:0.5em;
    margin-bottom:0.5em;

}
.date{
    width:50px;
}

</style>
</head>

<body>
<form action="loginaction/Result.php" method="post">
<fieldset>
<legend>Registration</legend><hr>
<label class="one" for="fname"> Name:</label>
 <input type="text" id="fname" name="fname"><hr>
 <label class="one" for="email">Email:</label>
 <input type="text" id="email" name="email"><hr>
 <label class="one" for="username">User Name:</label>
 <input type="text" id="username" name="username"><hr>
 <label class="one" for="password">Password:</label>
 <input type="password" id="password" name="password"><hr>
 <label class="one" for="cpassword">Confirm password:</label>
 <input type="password" id="cpassword" name="cpassword"><p></p><br><hr>
 <fieldset>
 <legend>Gender</legend><br>
<input type="radio" id="male" name="gender" value="male">
 <label for="male">Male</label>
 <input type="radio" id="female" name="gender" value="female">
 <label for="female">Female</label>
 <input type="radio" id="other" name="gender" value="other">
 <label for="other">Other</label></fieldset>
 <br><hr><br>
 <fieldset>
<legend>Date Of Birth</legend><br>
  <input type="text" class="date" name="date">&sol;
  <input type="text" class="date" name="date">&sol;
  <input type="text" class="date" name="date">
  <span>&lpar;dd &sol;mm &sol;yy &rpar;</span><br>
  </fieldset>
  <br><hr>
   
 <input type="submit" value="Submit">
<input type="reset">
</fieldset>
</form>
</body>
</html>