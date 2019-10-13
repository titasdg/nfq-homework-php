<?php

namespace src\NotTyped;

function calculatedHomeWorkSum(...$numbers): int
{
    $sum = 0;
    foreach($numbers as $number)
    {
        $sum +=$number;
    }
    return $sum;
}


?>