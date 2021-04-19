<?php
function binaryFind(array $numbers, int $find)
{
    $low = 0;
    $high = count($numbers)-1;
    while($low<=$high){
        $mid = ($low + $high)/2;
        if($numbers[$mid]>$find){
            $high = $mid - 1;
        }else if($numbers[$mid]<$find){
            $low = $mid +1;
        }else{
            return true;
        }
    }
    return false;
}
$numbers = range(1,100);
$number = 23;
$check = binaryFind($numbers,$number);
while()