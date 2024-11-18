<?php
    function findLargest($num1, $num2, $num3)
    {
        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        }
    }
    
    $a = 2;
    $b = 4;
    $c = 17;

    $largest = findLargest($a, $b, $c);

    echo "The largest number among $a, $b, and $c is: $largest";
?>
