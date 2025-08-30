<?php


session_start();
include('database.php');

$user = $_SESSION['username'];
$class = $_POST['enrollment'];

$sql = "SELECT class_id FROM Classes WHERE class_name = '{$class}'";
$class_name = $conn->query($sql);

if($class_name->num_rows > 0){
    $row = $class_name->fetch_assoc();
    $id = $row['class_id'];
    echo $id;

}
