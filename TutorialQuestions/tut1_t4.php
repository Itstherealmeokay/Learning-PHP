<?php

$x = "I need to study PHP very hard";

$words = explode(" ", $x);



function ciphers($sen) {
    // first letter of each word
    $sen = strtolower($sen);
    $words = explode(" ", $sen);
    $c1 = array();
    foreach ($words as $word){
       $first = substr($word, 0, 1);
       array_push($c1, $first);
    }
    $c1 = implode("", $c1);
    echo "Cipher 1: {$c1} <br>";

    $c2 = array();
    foreach ($words as $word){
        $firsttwo = substr($word,0, 2);
        array_push($c2, $firsttwo);
    }
    $c2 = implode("", $c2);
    echo "Cipher 2: $c2 <br>";

    $c3 = array();
    foreach ($words as $word){
        $last = substr($word, -1);
        array_push($c3, $last);
    }
    $c3 = implode("", $c3);
    echo "Cipher 3: $c3 <br>";  


    }



ciphers($x);



?>