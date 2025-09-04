<?php
// Step 1: Associative array create karna
$fruits = array(
    "Apple" => 120,
    "Banana" => 40,
    "Mango" => 100,
    "Orange" => 80,
    "Grapes" => 60
);

// Step 2: Sort by values (prices) using asort()
$byValue = $fruits;
asort($byValue);
echo "Fruits sorted by Price (Values):<br>";
foreach ($byValue as $fruit => $price) {
    echo "Fruit: " . $fruit . " , Price: " . $price . "<br>";
}

echo "<br>";

// Step 3: Sort by keys (fruit names) using ksort()
$byKey = $fruits;
ksort($byKey);
echo "Fruits sorted by Name (Keys):<br>";
foreach ($byKey as $fruit => $price) {
    echo "Fruit: " . $fruit . " , Price: " . $price . "<br>";
}
?>
