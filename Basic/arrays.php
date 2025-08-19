<?php

//array = variable that can hold more than one value

$foods = array("apple", "orange", "banana", "coconut");

//$foods[0] = "pineapple";
//array_push($foods, "pineapple", "kiwi");
//array_pop($foods);
//array_shift($foods);
$reveresed_foods = array_reverse($foods);
echo $foods[0] . "<br>";
echo $foods[1] . "<br>";
echo $foods[2] . "<br>";
echo $foods[3] . "<br>";

foreach($foods as $food){
    echo $food . "<br>";
}

foreach($reveresed_foods as $rfood) {
    echo $rfood . "<br>";
}

?>