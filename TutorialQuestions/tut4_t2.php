<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness_center";

$conn = new mysqli($servername, $username, $password);

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
$conn->query($sql);

$conn->select_db($dbname);

$sql = "CREATE TABLE Facility (
    facility_id INT PRIMARY KEY AUTO_INCREMENT,
    facility_name VARCHAR(255)
);

CREATE TABLE Instructor (
    instr_id INT PRIMARY KEY AUTO_INCREMENT,
    instr_name VARCHAR(255),
    facility_id INT ,
    FOREIGN KEY(facility_id) REFERENCES Facility(facility_id)
);

CREATE TABLE Classes (
    class_id INT PRIMARY KEY AUTO_INCREMENT,
    class_name VARCHAR(255),
    type VARCHAR(255),
    instr_id INT,
    FOREIGN KEY(instr_id) REFERENCES Instructor(instr_id)
);

CREATE TABLE Members (
    member_id INT PRIMARY KEY AUTO_INCREMENT,
    member_name VARCHAR(255)
);

CREATE TABLE Enrollment (
    class_id INT,
    member_id INT,
    FOREIGN KEY(class_id) REFERENCES Classes(class_id),
    FOREIGN KEY(member_id) REFERENCES Members(member_id),
    PRIMARY KEY (class_id, member_id)
);";

$conn->multi_query($sql);

$conn->close()






?>