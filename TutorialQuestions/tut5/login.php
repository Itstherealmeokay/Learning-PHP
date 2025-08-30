<?php
session_start();

include("database.php");

$username = $_POST['username'];

$sql = "SELECT member_name FROM Members WHERE member_name = '{$username}'";
$result = $conn->query($sql);

if($result->num_rows > 0){

    $_SESSION['username'] = $username;
    header('Location:dashboard.php');

}else{

    echo "No such user exists";

}



?>