<?php
    function printOdd($start, $end)
    {
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 != 0) {
                echo $i . ' ';
            }
        }
    }

    echo 'Odd numbers between 10 and 100 are: ';
    printOdd(10, 100);
?>
