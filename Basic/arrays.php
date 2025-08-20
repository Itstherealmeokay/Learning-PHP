<?php

//array = variable that can hold more than one value

$foods = array("apple", "orange", "banana", "coconut");

//$foods[0] = "pineapple"; // Replacing an element
//array_push($foods, "pineapple", "kiwi"); // Adds to end of Array 
//array_pop($foods); // Removes last element
//array_shift($foods); // Removes first element
//array_unshift($foods, "pineapple", "kiwi"); // Adds to beginning of array
array_splice($foods, 1, 2);
$reveresed_foods = array_reverse($foods);


foreach($foods as $food){
    echo $food . "<br>";
}
/*
foreach($reveresed_foods as $rfood) {
    echo $rfood . "<br>";
}
*/
?>