<?php
// Step 1: Array create karna (duplicate values ke saath)
$numbers = array(10, 20, 30, 20, 40, 10, 50, 30);

// Original Array
echo "Original Array: ";
print_r($numbers);

// Step 2: Remove duplicate values using array_unique()
$uniqueNumbers = array_unique($numbers);

// Step 3: Print result
echo "\nArray after removing duplicates: ";
print_r($uniqueNumbers);
?>
