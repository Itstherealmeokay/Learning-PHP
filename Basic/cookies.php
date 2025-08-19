<?php

//cookie = data stored on the user's computer

setcookie("fav_food", "pizza", time() + 86400, "/"); //time() + 86400 = cookie expires in 86400 seconds
setcookie("fav_drink", "water", time() + 86400, "/");
setcookie("fav_desert", "ice cream", time() + 86400, "/");

/*foreach($_COOKIE as $key => $value){
    echo "{$key} = {$value} <br>";
}*/

if(isset($_COOKIE["fav_food]"])){
    echo "Your favorite food is " . $_COOKIE["fav_food"];
}
else{
    echo "You have not set a favorite food";
}