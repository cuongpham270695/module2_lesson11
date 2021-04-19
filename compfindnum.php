<?php
function binaryFind(array $numbers, int $find)
{
    $low = 0;
    $high = count($numbers)-1;
    while($low<=$high){
        $mid = ($low + $high)/2;
        if($numbers[$mid]>$find){
            $high = $mid - 1;
            echo ceil($mid). " is too big, find smaller!" . "<br>";
        }else if($numbers[$mid]<$find){
            $low = $mid +1;
            echo ceil($mid). " is too small, find bigger!" . "<br>";
        }else{
            return true;
        }
    }
    return false;
}
$numbers = range(1,100);
$number = 71;
$check = binaryFind($numbers,$number);
{
    if ($number > $check) {
        echo "$check to find higher number!";
    } else if ($number < $check) {
        echo "Need to find lower number!";
    } else {
        echo "$number was find!";
    }
    }