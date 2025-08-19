<?php
// associative array = array with key value pairs

$capitals = array("USA"=>"Washington", 
                "Japan" => "Tokyo", 
                "South Korea" => "Seoul", 
                "India" => "New Delhi");

echo $capitals["Japan"];

$capitals["USA"] = "New York";
$capitals["China"] = "Beijing";
array_pop($capitals);
array_shift($capitals);
$keys = array_keys($capitals);
$values = array_values($capitals);
$array_flip =array_flip($capitals);
$array_reverse = array_reverse($capitals);

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

