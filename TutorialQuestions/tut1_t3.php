<?php


function revNum ($num) {

    $num = (string) $num;
    $num = strrev($num);
    $num = (int) $num;
    $num = $num * 5;
    return $num;
}

$y = 4251;
$y = revNum($y);
echo $y;
?>

