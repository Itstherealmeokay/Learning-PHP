<?php

//$_SERVER = super global variable, contains info about the server
//$_SERVER["PHP_SELF"] = current file name
// $_SERVER is an associative array




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method = "post">
        <label>username</label><br>
        <input type="text" name="username"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>