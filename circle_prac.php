<?php


$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;

$area = pi() * pow($radius, 2);
$area = round($area, 2);
$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);
$volume = 4/3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "The circumference is {$circumference}";
echo "<br>";
echo "The area is {$area}<br>";
echo "The volume is {$volume}";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "circle_prac.php" method = "post">
        <label>radius: </label><br>
        <input type="text" name="radius"><br>
        <input type="submit" value="calculate">




    </form>
</body>
</html>