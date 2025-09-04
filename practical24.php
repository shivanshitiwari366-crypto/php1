<?php
// Indexed Array
$numbers = array(10,20,30,40,50);
// Display array elements
echo "Array elements: ";
foreach ($numbers as $num){
    echo $num . " ";
}
//Calculate sum
$sum = 0;
foreach ($numbers as $num){
    $sum += $num;
}
echo"\nSum of all numbers = " . $sum;
?>