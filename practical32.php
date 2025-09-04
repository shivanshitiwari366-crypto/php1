<?php
// Step 1: Associative array create karna
$students = array(
    "Ziya" => 85,
    "Riya" => 92,
    "Shivanshi" => 78,
    "Disha" => 88,
    "Priyanshi" => 95
);

// Step 2: Ek student ke marks update karna (e.g., Karan)
$students["priyanshi"] = 90;

// Step 3: Print updated array
echo "Updated Students and their Marks:<br>";
foreach ($students as $name => $marks) {
    echo "Student: " . $name . " , Marks: " . $marks . "<br>";
}
?>
