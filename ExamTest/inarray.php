<?php

$x = array ("apple", "banana", "cherry");


if (in_array("banana", $x)) {
    echo "Yes, 'banana' is one of the fruits in the array" . "<br>";
}

$result = array_search("banana", $x);
echo $result . "<br>";

$all = array_values($x);
foreach($all as $fruit){
    echo $fruit . "<br>";
}

?>