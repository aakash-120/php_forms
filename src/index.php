<?php

$n1 = $_GET ["length"];  
if (!preg_match ("/^[0-9]*$/", $n1) ){  
    $ErrMsg = "Only numeric value is allowed.";  
    echo $ErrMsg;  
} else {  
    echo $mobileno;  
}  
$n2 = $_GET ["width"];  
if (!preg_match ("/^[0-9]*$/", $n2) ){  
    $ErrMsg = "Only numeric value is allowed.";  
    echo $ErrMsg;  
} else {  
    echo $mobileno;  
} 



$num1 = (float)$_GET["length"];
$num2 = (float)$_GET["width"];

$per = 2 * ($num1 + $num2);
$area = $num1 * $num2;

echo "$per<br>";
echo "$area";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="get">
Length of Rectangle: <input type="text" name="length"><br>
Width of Rectangle: <input type="text" name="width"><br>
<input type = "submit" name = "SUBMIT" id = "id1" value = "Calculate area & Perimeter">
</form>

<div>
<p> Area is <?php echo $area?> sq. mtr</p>
<p> Perimeter is <?php echo $per?> mtr</p>

</div>
</body>
</html>