<?php
// Indexed array create karna
$numbers = array(15, 2, 39, 8, 25, 4);

// Print original array
echo "Array Elements: ";
print_r($numbers);

// Find smallest number
$smallest = min($numbers);

// Find largest number
$largest = max($numbers);

// Output
echo "\nSmallest Number: " . $smallest;
echo "\nLargest Number: " . $largest;
?>
