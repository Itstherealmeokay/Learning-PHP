<?php

// isset() = Returns True if a variable is declared and not null
// empty() = Returns True if a variable is not declared, false, null

$username = "";

if(isset($username)){
    echo "Username is set";
}
else{
    echo "Username is not set";
}


if(empty($username)){
    echo "Username is empty";
}
else{
    echo "Username is not empty";
}


?>