<?php
require_once __DIR__ . '/vendor/autoload.php';
require 'src/Strict.php';
require 'src/NotTyped.php';
require 'src/Soft.php';
use function src\Soft\calculatedHomeWorkSum as Soft;
use function src\Strict\calculatedHomeWorkSum as Strict;
use function src\NotTyped\calculatedHomeWorkSum as NotTyped;
use Colors\Color;

$c = new Color();

function calculatedHomeWorkSum(...$numbers)
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

    echo $c("calculatedHomeWorkSum: ".calculatedHomeWorkSum(3,2.2,'1'))->bold()->yellow().PHP_EOL;

    echo $c("src\NotTyped\calculatedHomeWorkSum: ".NotTyped(3,2.2,'1'))->bold()->white().PHP_EOL;

    echo $c("src\Soft\calculatedHomeWorkSum: ".Soft(3,2.2,'1'))->bold()->blue().PHP_EOL;

    echo $c("src\Strict\calculatedHomeWorkSum: ".Strict(3,2.2,'1'))->bold()->red().PHP_EOL;


?>