<?php


if(isset($_GET["submit"])){
    $name = $_GET["dish"];
    $price = $_GET["price"];

    echo $name;
    echo $price;

}

fopen("menu.txt", "a")







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tut3_t3.php" method="get">
        <label>Dish Name</label>
        <input type="text" name="dish"><br>
        <label>Price</label>
        <input type="text" name="price"><br>
        <input type="submit" name="submit">
</form>
</body>
</html>