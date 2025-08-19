

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_post.php" method="post">
        <label>username</label><br>
        <input type="text" name="username"><br>
        <label>password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>
</body>
</html>

<?php

/* $_GET and $_POST = special variables used to collect data from an HTML form. Data is sent
to the file in the action attribute of <for>
<form action = "get_post.php" method = "post"> 

$_GET = Data is appended to the url
$_POST = Data is sent in the body of the HTTP request
*/

echo $_POST["username"] . "<br>";
echo "{$_POST["password"]}<br>";

?>