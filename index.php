<?php 
require_once __DIR__ . '/vendor/autoload.php';
use function src\Soft\calculatedHomeWorkSum as Soft;
use function src\Strict\calculatedHomeWorkSum as Strict;
use function src\NotTyped\calculatedHomeWorkSum as NotTyped;
use Colors\Color;

$c = new Color();

function calculatedHomeWorkSum(...$numbers)
{
    $sum = 0;
    foreach($numbers as $number)
    {
        $sum +=$number;
    }
    return $sum;  
}

try{    
    echo $c("calculatedHomeWorkSum: ".calculatedHomeWorkSum(3,2.2,'1'))->bold()->yellow().PHP_EOL;
}
catch(\Throwable $exp)
{
    echo("Error! Try again later").PHP_EOL;
} 

try{    
    echo $c("src\NotTyped\calculatedHomeWorkSum: ".NotTyped(3,2.2,'1'))->bold()->white().PHP_EOL;
}
catch(\Throwable $exp)
{
    echo("Error! Try again later").PHP_EOL;
} 
try{
    echo $c("src\Soft\calculatedHomeWorkSum: ".Soft(3,2.2,'1'))->bold()->blue().PHP_EOL;
}
catch(\Throwable $exp)
{
    echo($exp).PHP_EOL;
} 
try{    
    echo $c("src\Strict\calculatedHomeWorkSum: ".Strict(3,2.2,'1'))->bold()->red().PHP_EOL;
}
catch(\Throwable $exp)
{
    echo("Error! Try again later").PHP_EOL;
} 


?>