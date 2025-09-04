<?php
// Step 1: Array create karna
$numbers = array(20, 17, 45, 5, 35);

// Original Array
echo "Original Array: ";
print_r($numbers);

// Step 2: Ascending order using sort()
$asc = $numbers;
sort($asc);
echo "\nArray in Ascending Order: ";
print_r($asc);

// Step 3: Descending order using rsort()
$desc = $numbers;
rsort($desc);
echo "\nArray in Descending Order: ";
print_r($desc);
?>
