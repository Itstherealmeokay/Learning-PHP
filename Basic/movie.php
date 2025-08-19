<?php

$child = false;
$senior = false;
$ticket_price = null;

if($child || $senior){
    $ticket_price = 10;
}
else{
    $ticket_price = 15;
}

echo "Your ticket price is \${$ticket_price}";