<?php
    function calculateVAT($amount, $vat = 15) {
        if ($amount < 0) {
            return "Invalid amount. Please enter a positive value.";
        }
        $vat = ($amount * $vat) / 100;

        return $vat;
    }

    $amount = 1000;
    $vat = 15;

    $vat = calculateVAT($amount, $vat);
    $totalAmount = $amount + $vat;

    echo"Total amount after adding vat is: ". $totalAmount ."<br>";
?>
