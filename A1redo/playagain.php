<?php
session_start();
$subject = $_POST["subject"];
$_SESSION["subject"] = $subject;


if($subject == "math"){
    header("Location: math.php");
} else {
    header("Location: science.php");
}
?>