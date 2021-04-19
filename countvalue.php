<?php
function countValue($numbers,$value)
{
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($value==$numbers[$i]) {
            $count++;
        }
    }
    return $count;
}

$numbers = [];
$display = "";
for($i=0;$i<100;$i++){
    $numbers[$i]=rand(1,80);
}
for($i=0;$i<100;$i++){
    $display = $display . $numbers[$i] . " ";
}
$num = rand(1,80);
$times = countValue($numbers,$num);
echo $display;
echo "<br>";
echo $num . " appeared " . $times . " times";