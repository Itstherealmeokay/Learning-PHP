<?php
    if (isset($_POST["submit"])) {
        // Check if each checkbox is set
        if (isset($_POST["pizza"])) {
            echo "You ordered Pizza<br>";
        }
        if (isset($_POST["pasta"])) {
            echo "You ordered Pasta<br>";
        }
        if (isset($_POST["salad"])) {
            echo "You ordered Salad<br>";
        }
        if (isset($_POST["sushi"])) {
            echo "You ordered Sushi<br>";
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
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza"> Pizza <br>
        <input type="checkbox" name="pasta" value="Pasta"> Pasta <br>
        <input type="checkbox" name="salad" value="Salad"> Salad <br>
        <input type="checkbox" name="sushi" value="Sushi"> Sushi <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
