<?php


function revNum ($num) {

    $num = (string) $num;
    $num = strrev($num);
    $num = (int) $num;
    $num = $num * 5;
    return $num;
}

$y = 123;
$y = revNum($y);
echo $y;
?>

