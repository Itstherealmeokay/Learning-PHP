<?php

$item = "Pizza";
$price = 6.99;
$quantity = $_POST["quantity"];
$total = $quantity * $price;

echo "You ordered {$quantity} {$item}(s) for a total of \${$total}";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "restaurentform.php" method = "post">
        <label>quantity: </label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>