<?php
session_start();

if (isset($_POST["login"])){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    header("Location: home.php");
}



?>