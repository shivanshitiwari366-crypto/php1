<?php
// Step 1: Associative array create karna
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Australia" => "Canberra"
);

// Step 2: foreach loop se print karna
echo "List of Countries and their Capitals:<br>";
foreach ($countries as $country => $capital) {
    echo "Country: " . $country . " , Capital: " . $capital . "<br>";
}
?>
