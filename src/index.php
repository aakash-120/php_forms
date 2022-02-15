<?php

if (isset($_POST['SUBMIT'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $answer = bill_amount($units);
        echo "$answer";
        
    }
}
function bill_amount($units)
{
    global $bill_price ;

    if($units <= 50)
    {
        $bill_price = $units * 3.50;   
    }
    else if($units > 50 && $units <= 150)
    {
        $fifty_bill = 50 * 3.50;
        $units = $units - 50;
        $bill_price = $fifty_bill + $units * 4.00;

    }
    else if($units > 150 && $units <= 250)
    {
        $fifty_bill = 50 * 3.50;
        $hundred_bill = 100 * 4.00;
        $units = $units - 150;
        $bill_price = $fifty_bill + $hundred_bill + $units * 5.20;
        
    }
    else
    {
        $fifty_bill = 50 * 3.50;
        $hundred_bill = 100 * 4.00;
        $two_hundred_bill= 100 * 5.20;
        $units = $units - 250;
        $bill_price = $fifty_bill + $hundred_bill +$two_hundred_bill +$units * 6.50;
    }
    return $bill_price;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
Enter units to calculate bill: <input type="text" name="units"><br>
<input type="submit" name = SUBMIT>
</form>



</body>
</html>