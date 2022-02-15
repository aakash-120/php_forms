<?php


global $number;
global $answer;
$number1 = (float)$_GET["number1"];
$number2 = (float)$_GET["number2"];


$n1 = $_GET ["number1"];  
if (!preg_match ("/^[0-9]*$/", $n1) ){  
    $ErrMsg = "Only numeric value is allowed.";  
    echo $ErrMsg;  
} else {  
    echo $mobileno;  
}  
$n2 = $_GET ["number2"];  
if (!preg_match ("/^[0-9]*$/", $n2) ){  
    $ErrMsg = "Only numeric value is allowed.";  
    echo $ErrMsg;  
} else {  
    echo $mobileno;  
} 


if(isset($_GET['addition'])) { 
    $number = $_GET["addition"];
}
if(isset($_GET['subtract'])) { 
    $number =$_GET["subtract"];
}
if(isset($_GET["multiply"])) { 
    $number = $_GET["multiply"];
}
if(isset($_GET["divide"])) { 
    $number = $_GET["divide"];
}

switch ($number) {
    case "+":
        $answer = $number1 + $number2;
       
        break;

    case "-":
        $answer = $number1 - $number2;
        break;

    case "*":
        $answer = $number1 * $number2;
        break;

    case "/":
        if($number2 == 0)
        {
            echo "division by zero not possible";
        }
        else{
        $answer = $number1 / $number2;
        }
        break;
     
}


?>


<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
<body>

<form action="" method="get">
Number 1: <input type="text" name="number1"><br><br>
Number 2: <input type="text" name="number2"><br><br>
Result : <input type ="text" id = "id1" name= "" value = '<?php echo $answer ?>'><br><br>
<input type = "submit" name = "addition" value="+">
<input type = "submit" name = "subtract" value = "-">
<input type = "submit" name = "multiply" value="*">
<input type = "submit" name = "divide" value="/">

</form>

</body>
</html>

