<?php

//function = write code once, reuse when needed
// type () after the function name to call the function
//ex add(5, 7);


function happy_birthday($name, $age){

    echo "Happy Birthday dear {$name}";
    echo "<br>";
    echo "You are {$age} years old now {$name} <br>";
    echo "Have a nice day {$name} <br><br>";
    
}

happy_birthday("CF", 30);
happy_birthday("Ching Fong", 24);


function is_even($num){
    return $num % 2;
}

echo is_even(6) . "<br>";

function hypotenuse(float $a, float $b){
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}

echo hypotenuse(18, 4);
?>

