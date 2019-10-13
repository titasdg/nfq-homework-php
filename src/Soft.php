<?php

namespace src\Soft;

function calculatedHomeWorkSum(int...$numbers): int
{
    try{
        $sum = 0;
        foreach($numbers as $number)
        {
            $sum +=$number;
        }
        return $sum;  
    }
    catch(\Throwable $exp)
    {
        echo("Error! Try again later");
    } 
}


?>