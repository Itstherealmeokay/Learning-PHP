<?php

// String
    $name = "Ching Fong Goh <br>";
    $food = "pizza";
    $email = "fake@123gmail.com";

// Int
    $age = 24;
    $users = 2;
    $quantity = 3;


// Float
    $gpa = 3.55;
    $price = 6.99;
    $tax_rate = 5.1;


// Boolean
    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null;

    echo $name;
    echo "Hello {$name} <br>";
    echo "You like {$food} <br>";
    echo "Your email is {$email}<br>";

    echo"You are {$age} years old<br>";
    echo"There are {$users} online";
    echo"you would like to buy {$quantity} {$food} <br>";


    echo "Your gpa is {$gpa} <br>";
    echo "Your {$food} price is \${$price} <br>";
    echo "Tax rate is {$tax_rate}% <br>";

    echo "Online status: {$online}";
    
    echo"You have ordered {$quantity} x {$food}s<br>";
    $total = $quantity * $price;
    echo"Yout your total is \${$total}";
?>