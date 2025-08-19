<?php

$capitals = array("USA"=>"Washington", 
                "Japan" => "Tokyo", 
                "South Korea" => "Seoul", 
                "India" => "New Delhi");

$capital = $_POST["country"];

echo "The Capital of {$capital} is $capitals[$capital]"


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "associative_ex.php" method = "post">
        <label>Enter a country</label>
        <input type="text" name="country"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>