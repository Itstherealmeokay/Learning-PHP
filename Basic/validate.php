<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "validate.php" method = "post">
        <label>username</label><br>
        <input type="text" name="username"><br>
        <input type="text" name="age"><br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
        
    </form>
</body>
</html>

<?php

    /*if(isset($_POST["login"])){

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        echo "Hello {$username}";

        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        echo "You are {$age} years old";

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    }*/

    if(isset($_POST["login"])){

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        echo "Hello {$username}";

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        echo "You are {$age} years old";

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    }