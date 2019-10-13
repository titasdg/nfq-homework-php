<?php
declare(strict_types=1);

namespace src\Strict;

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