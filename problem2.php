<!-- Each new term in the Fibonacci sequence is generated by adding the previous two terms. 
By starting with 1 and 2, the first 10 terms will be:

1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...

By considering the terms in the Fibonacci sequence whose values do not exceed four million, 
find the sum of the even-valued terms. -->

<?php

#abandoned this approach - trying new angle I found.

$num1 = 1;
$num1Temp = 0;
$num2 = 1;
$num2Temp = 0;
$add = 0;
$sum = 0;

do {
    echo "num1: ".$num1."<br>";
    echo "num2: ".$num2."<br>";
    if (($num1 + $num2) % 2 == 0) { 
        $sum += $num1 + $num2;
        $num1Temp = $num1;
        $num2Temp = $num2;
        $num1 = $num2Temp;
        $num2 = $num1Temp + $num2Temp;
        $add += $num1 + $num2;

        echo $sum."<br>";
    }

    $add += $num1 + $num2;
    $num1Temp = $num1;
    $num2Temp = $num2;
    $num1 = $num2Temp;
    $num2 = $num1Temp + $num2Temp;

} while ($sum <= 4000000);

# A number is Fibonacci if and only if one or both of (5*n2 + 4) or (5*n2 – 4) is a perfect square 



