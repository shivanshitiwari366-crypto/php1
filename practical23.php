<?php
// Array create karna
$numbers = array(5, 2, 9, 1, 7);

// Original Array
echo "Original Array: ";
print_r($numbers);

// sort() - Ascending order (values)
$asc = $numbers;
sort($asc);
echo "\nUsing sort(): ";
print_r($asc);

// rsort() - Descending order (values)
$desc = $numbers;
rsort($desc);
echo "\nUsing rsort(): ";
print_r($desc);

// asort() - Ascending order with key association
$asc_assoc = $numbers;
asort($asc_assoc);
echo "\nUsing asort(): ";
print_r($asc_assoc);

// arsort() - Descending order with key association
$desc_assoc = $numbers;
arsort($desc_assoc);
echo "\nUsing arsort(): ";
print_r($desc_assoc);

// ksort() - Ascending order by keys
$ksort_arr = $numbers;
ksort($ksort_arr);
echo "\nUsing ksort(): ";
print_r($ksort_arr);

// krsort() - Descending order by keys
$krsort_arr = $numbers;
krsort($krsort_arr);
echo "\nUsing krsort(): ";
print_r($krsort_arr);
?>
