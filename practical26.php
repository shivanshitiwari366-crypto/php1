<?php
// Step 1: Array create karna
$numbers = array(10, 20, 30, 40, 50, 60);

echo "Original Array: ";
print_r($numbers);

// Step 2: Reverse without array_reverse()
echo "\nReverse (without array_reverse): ";
for($i = count($numbers) - 1; $i >= 0; $i--) {
    echo $numbers[$i] . " ";
}

// Step 3: Reverse with array_reverse()
$revArray = array_reverse($numbers);
echo "\nReverse (with array_reverse): ";
print_r($revArray);
?>
