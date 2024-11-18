<?php
    $array = [5, 12, 23, 34, 45, 56, 67, 78, 89];
    $key = 34;
    $found = false;

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $key) {
            $found = true;
            echo "Element $key found at index $i <br>";
            break;
        }
    }

    if (!$found) {
        echo "Element $key not found in the array.\n";
    }
?>
