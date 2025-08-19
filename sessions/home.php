<?php
session_start();
echo $_SESSION["username"];
echo "<br>";
echo $_SESSION["password"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the homepage
    <a href="index.php">Login Page</a>
    <a href="logout.php">Logout</a>
</body>
</html>