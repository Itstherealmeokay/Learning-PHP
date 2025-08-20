<?php

session_start();

$username = $_SESSION["username"];


if(isset($_POST["submit"]) && isset($_POST["subject"])){

    $_SESSION["subject"] = $_POST["subject"];
    $subject = $_POST["subject"];

    if ($subject == "math"){
        header("Location: math.php");
    }
    elseif ($subject == "science"){
        header("Location: science.php");
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
    <h2>Welcome <?php echo $username ?> </h2><br>
    Please Choose a Quiz
    <form action= "home.php" method = "post">
        <select name="subject">
            <option value = "math">Math</option>
            <option value = "science">Science</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>

</body>
</html>