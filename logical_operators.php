<?php
// Logical Operators = combine conditional statements
// if(condition && condition)

//&& = AND
//|| = OR
//! = NOT

$temp = 15;
$cloudy = false;

if($temp >= 0 && $temp <= 30){

    echo "The weather is good";

}
else{
    echo "The weather is bad";
}


if($temp < 0 || $temp > 30){

    echo "The weather is bad";

}
else{
    echo "The weather is good";
}


if(!$cloudy){
    echo "The weather is sunny";
}
else{
    echo "The weather is cloudy";
}

?>