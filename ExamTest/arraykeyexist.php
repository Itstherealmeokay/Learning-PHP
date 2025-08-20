<?php
// Sample associative array
$y = array(
    "name" => "John",
    "age" => 25,
    "city" => "New York"
);

// Key to search for
$x = "age";


// Check if the key exists in the array
if (array_key_exists($x, $y)) {
    echo "The key '$x' exists in the array with the value: " . $y[$x];
} else {
    echo "The key '$x' does not exist in the array.";
}

?>
