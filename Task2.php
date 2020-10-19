<<!DOCTYPE html>
<html>
<body>
<h1> Arif </h1>
<h1> Html </h1>

<?php 
echo "PHP ";

$txt = "Hello world!";
$x = 5;
$y = 10.5;
echo "I love " . $txt . "!\n";
echo "<br>";
echo $x + $y;
var_dump($txt);

echo "<br>";
$cars = array(1,"2","3");
var_dump($cars);

echo "<br>";
$length = 10;  
$width = 12;  
echo "The Area of a Rectangle $length * $width= " . ($length * $width) . "<br />";

for($counter=10;$counter<=100;$counter++)
  {
    if($counter%2!=0)
    {
      echo "$counter <br>";
    }
    else {
        echo "Odd Number";
    }
  }


?>
</body>
</html>



