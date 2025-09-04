<?php
// Step 1: Array create karna
$numbers = array(10, 20, 30, 40, 50);

// Step 2: Value check karna
$searchValue = 50;

if (in_array($searchValue, $numbers)) {
    echo "Value $searchValue exists in the array.";
} else {
    echo "Value $searchValue does not exist in the array.";
}
?>
