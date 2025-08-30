<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness_center";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = 
"INSERT INTO Facility (facility_name)
VALUES ('FC_North'), ('FC_South');
";

$conn->query($sql);

$sql = "INSERT INTO Instructor (instr_name, facility_id)
VALUES 
('Alex Goh', 1),
('Junior Tan', 2),
('Christopher Wang', 2),
('Julian Wu', 1),
('Fabien Goh', 2);";

$conn->query($sql);


for($i=0; $i<=10; $i++){
    $name = "Jux" . $i;
    $sql = "INSERT INTO Members (member_name)
    VALUES ('$name')";
    $conn->query($sql);
}

$sql = "INSERT INTO Classes (class_name, type, instr_id)
VALUES
('Group_Yoga', 'Group', 1),
('Personal_Yoga', 'Individual', 2),
('HIIT_Session', 'Group', 3),
('Run_Training', 'Group', 4),
('Aerobics', 'Individual', 5);
";

$conn->query($sql);

$sql = "INSERT INTO Enrollment (class_id, member_id)
VALUES
(1,10),
(1,1),
(1,2),
(2,3),
(1,3),
(3,4),
(3,5),
(4,6),
(4,7),
(5,8),
(4,8),
(4,9);
";

$conn->query($sql);

$conn->close()

?>