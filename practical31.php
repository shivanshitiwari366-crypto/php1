<?php
// Step 1: Existing associative array
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Australia" => "Canberra"
);

// Step 2: Naya key-value pair add karna
$countries["Germany"] = "Berlin";

// Step 3: Print updated array
echo "Updated List of Countries and their Capitals:<br>";
foreach ($countries as $country => $capital) {
    echo "Country: " . $country . " , Capital: " . $capital . "<br>";
}
?>
