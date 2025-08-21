<?php


$pattern_main = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^a-zA-Z0-9]).{8,16}$/";
$pattern_up = "/^(?=.*[A-Z]).+$/";
$pattern_low = "/^(?=.*[a-z]).+$/";
$pattern_num = "/^(?=.*[0-9]).+$/";
$pattern_len = "/^.{8,16}+$/";
$pattern_spec = "/^(?=.*[^a-zA-Z0-9]).+$/";


if (isset($_POST["password"])){
    $password = $_POST["password"];

    if (preg_match($pattern_main, $password) == 1){

        echo "$password is satisfactory<br>";

    }else{

        echo "$password is unsatisfactory<br>";

    }

    if (preg_match($pattern_up, $password) == 0){

        echo "Missing Uppercase<br>";
    }

    if (preg_match($pattern_low, $password) == 0){

        echo "Missing Lowercase<br>";
    }

    if (preg_match($pattern_num, $password) == 0){

        echo "Missing Numbers<br>";
    }

    if (preg_match($pattern_len, $password) == 0){

        echo "Length Error<br>";
    }

    if (preg_match($pattern_spec, $password) == 0){

        echo "Missing Special Characters<br>";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tut1_t5.php" method = "post">
        <input type="text" name="password"><br>
        <input type="submit" name = "submit" value="submit">
    </form>
</body>
</html>