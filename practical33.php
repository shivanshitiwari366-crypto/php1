<?php
// Step 1: Associative array create karna
$students = array(
    "Ziya" => 85,
    "Riya" => 92,
    "Shivanshi" => 78,
    "Disha" => 88
);

// Step 2: Key check karna
$searchKey = "Shivanshi";

if (array_key_exists($searchKey, $students)) {
    echo "Key '$searchKey' exists in the array. Marks: " . $students[$searchKey];
} else {
    echo "Key '$searchKey' does not exist in the array.";
}
?>
