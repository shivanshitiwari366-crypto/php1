<?php
// Create index array of size 10
$numbers = array();
//Fill array with values 1 to 10
for($i = 0; $i < 10; $i++){
    $numbers[$i] = $i + 1;
}
// Print array elements using foreach loop
foreach($numbers as $value){
    echo $value . "";
}
?>