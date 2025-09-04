<?php
// Step 1: Associative array create karna
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Germany" => "Berlin"
);

// Step 2: Search value (capital city)
$searchCapital = "Tokyo";

// Step 3: Search using array_search()
$country = array_search($searchCapital, $countries);

if ($country !== false) {
    echo "The capital city '$searchCapital' belongs to country: $country";
} else {
    echo "The capital city '$searchCapital' was not found in the array.";
}
?>
