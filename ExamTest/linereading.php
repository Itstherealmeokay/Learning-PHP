<?php


$file = fopen("test.txt", "r");

$d = fgetcsv($file, 0, "/");

foreach($d as $key => $value){

    echo $value . "<br>";
}

fclose($file);
?>



