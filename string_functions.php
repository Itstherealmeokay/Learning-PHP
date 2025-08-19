<?php

    $username = "Ching Fong";
    $phone = "012-345-6789";

    $username = strtolower($username);
    echo $username . "<br>";

    $username = strtoupper($username);
    echo $username . "<br>";

    $username = trim($username);
    echo $username . "<br>";

    $username = str_pad($username, 20, "*");
    echo $username . "<br>";

    $phone = str_replace("-", "*", $phone);
    echo $phone . "<br>";

    $username = strrev($username);
    echo $username . "<br>";

    $username = str_shuffle($username);
    echo $username . "<br>";

    $a = "Ching Fong";
    $b = "Ching Fong";  
    echo strcmp($a, $b) . "<br>";

    $count = strlen($username);
    echo $count . "<br>";

    $username = "Ching Fong";
    $position = strpos($username, "Fong");
    echo $position . "<br>";

    $firstname = substr($username, 0, 5);
    echo $firstname . "<br>";

    $lastname = substr($username, 6);
    echo $lastname . "<br>";

    $username = " Goh Ching Fong";
    $fullname = explode(" ", $username);

    foreach($fullname as $name){

        echo $name . "<br>";
    }

    $username = implode(" ", $fullname);
    echo $username . "<br>";