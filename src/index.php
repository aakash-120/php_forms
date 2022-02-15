<?php

function conversion()
{
    $n1 = $_GET ["input"];  
    if (!preg_match ("/^[0-9]*$/", $n1) )
    {  
        $ErrMsg = "Only numeric value is allowed.";  
        echo $ErrMsg;  
    }  
    else
    {
        $num= "";
        $num1 = (float)$_GET["input"];
        $num2 = (float)$_GET["radiobtn"];

        if ($num2 ==1) 
        {
            $num = $num1 * 60;
        } 
        else 
        {
            $num = $num1 * 60 * 60;
        }
    }
    return $num;
}


if(array_key_exists('SUBMIT', $_GET)) {
    $n = conversion();
}

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

<div id = "id1">
<form action="" method="get">
<input type="text" name="input"><br>

<input type = "radio" name = "radiobtn" value=1>hours to min
<br>
<input type = "radio" name = "radiobtn" value=0>hours to seconds
<br>
<p><?php 
if(array_key_exists('input', $_GET))
{
    if($_GET["radiobtn"]==1 )
    {
        echo $_GET['input']." hours to $n min";
    }
    else
    {
        echo $_GET['input']." hours to $n seconds";
    }
}
?></p>


<input type = "submit" name = "SUBMIT" id = "id2" value = "Convert">
</form>
</div>

</body>
</html>