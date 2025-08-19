<?php

//Arithmetic Operators
$x = 10;
$y = 2;
$z = null;


$z = $x + $y;
echo $z . "<br>";
$z = $x - $y;
echo $z . "<br>";
$z = $x * $y;
echo $z . "<br>";
$z = $x / $y;
echo $z . "<br>";
$z = $x ** $y;
echo $z . "<br>";
$z = $x % $y;
echo $z . "<br>";

//Increment and Decrement
$counter = 0;
$counter = $counter + 1;
echo $counter . "<br>";

// ++ = +1
// -- = -1
$counter++;
echo $counter . "<br>";
$counter--;
echo $counter . "<br>";

// += = +=
// -= = -=
$counter += 5;
echo $counter . "<br>";
$counter -= 5;
echo $counter . "<br>";


//Operator Precedence
// ()
// **
// * / %
// + -

$total = 1 + 2 - 3 * 4 / 5 ** 6;
echo $total . "<br>";


?>