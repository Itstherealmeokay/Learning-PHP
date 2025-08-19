<?php
// associative array = array with key value pairs

$capitals = array("USA"=>"Washington", 
                "Japan" => "Tokyo", 
                "South Korea" => "Seoul", 
                "India" => "New Delhi");

echo $capitals["Japan"];

$capitals["USA"] = "New York";
$capitals["China"] = "Beijing";
array_pop($capitals); //removes the last element
array_shift($capitals); //removes the first element
$keys = array_keys($capitals); //returns an array of keys
$values = array_values($capitals); //returns an array of values
$array_flip =array_flip($capitals); // flip keys and values
$array_reverse = array_reverse($capitals); //reverses the array

echo count($capitals);


foreach ($capitals as $key => $value){

    echo "{$key} = {$value} <br>";

}

foreach ($keys as $key){
    echo $key . "<br>";
}

foreach ($array_flip as $key => $value){
    echo "{$key} = {$value} <br>";
}


foreach ($array_reverse as $key => $value ){

    echo "{$key} = {$value} <br>";
}
?>

