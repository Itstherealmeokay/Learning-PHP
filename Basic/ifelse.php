<?php
// if statement
$age = 101;
$adult = true;

if($adult){
    echo "You are an adult";
}

else{
    echo "You are not an adult";
}



if($age >= 100){

    echo"What are you? A dinosaur?";
}
elseif ($age >= 18) {
    echo "You may enter this site";
}
elseif($age <= 0){
    echo "That was not a valid age";
}

else {

    echo "You must be 18+ to enter this site";
}

?>