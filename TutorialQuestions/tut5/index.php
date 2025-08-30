<?php

include('database.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='login.php' method='post'>
        <label>Username</label><br>
        <input type="text" name="username"><br>
        <input type="submit" name="login", value="Login">
</body>
</html>