<?php

//switch = replacement to using many elseif statements more efficiently

$grade = "Pizza";

if($grade == "A"){
    echo "You got an A";
}
elseif($grade == "B"){
    echo "You got a B";
}
elseif($grade == "C"){
    echo "You got a C";
}
elseif($grade == "D"){
    echo "You got a D";
}
elseif($grade == "F"){
    echo "You got an F";
}

else{
    echo "Invalid grade";
}


//SWITCH version

switch($grade){
    case "A":
        echo "You got an A";
        break;
    case "B":
        echo "You got a B";
        break;
    case "C":
        echo "You got a C";
        break;
    case "D":
        echo "You got a D";
        break;
    case "F":
        echo "You got an F";
        break;
    default:
        echo "{$grade} is an Invalid grade";
}



$date = "Monday";
echo $date;

switch($date){
    case"Monday":
        echo "I hate Mondays";
        break;
    case "Tuesday":
        echo "It is Taco Tuesdays";
        break;
    case "Wednesday":
        echo"The Work Week is almost over";
        break;
    case"Thursday":
        echo"Its almost the Weekend";
        break;
    case"Friday":
        echo"The Weekend is here";
        break;
    case"Saturday":
        echo"Time to Party";
        break;
    case"Sunday":
        echo"Time to Relax";
        break;
    default:
        echo"{$date } is an Invalid day";
}



?>