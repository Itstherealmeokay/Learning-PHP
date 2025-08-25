<?php

$arr1 = [4, 12, 7];
$arr2 = [9, 5, 2, 8];
$arr3 = [14, 33, 27, 5, 19];
$arr4 = [20, 30, 50];
$arr5 = [13, 25, 7, 9, 2, 18];
$arr6 = [3, 10, 12, 15];
$arr7 = [21, 8, 9, 7, 5];
$arr8 = [6, 17, 22, 14];
$arr9 = [1, 2, 3, 4, 5, 6];
$arr10 = [7, 14, 21];



$assoc_sum = [];

for ($i = 1; $i<=10; $i++){

    $assoc_sum["arr".$i] = array_sum(${"arr".$i});

}

//$capitals["USA"] = "New York";



echo "<br>";
print_r($assoc_sum);




?>