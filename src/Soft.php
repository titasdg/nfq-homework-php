<?php

namespace src\Soft;

function calculatedHomeWorkSum(int...$numbers): int
{
    $sum = 0;
    foreach($numbers as $number)
    {
        $sum +=$number;
    }
    return $sum;
}


?>