<?php

session_start();
$name = $_SESSION['username'];

include('database.php');

?>



<h1>Welcome to Dashboard, User <?php echo $name?></h1>

<?php
echo "<h2>Classes</h2>";
$sql = "SELECT
CLASSES.class_name,
CLASSES.type,
CLASSES.class_id,
Instructor.instr_name,
Facility.facility_name

FROM Classes
JOIN Instructor ON Classes.instr_id = Instructor.instr_id
JOIN Facility ON Instructor.facility_id = Facility.facility_id;
";


$result = $conn->query($sql);
if ($result->num_rows > 0){
    echo 
    "<table border =1>
        <th>ID</th>
        <th>Class Name</th>
        <th>Location</th>
        <th>Type</th>
        <th>Instructor</th>";
}

while($row = $result->fetch_assoc()){
    echo
    "<tr>
        <td>{$row['class_id']}</td>
        <td>{$row['class_name']}</td>
        <td>{$row['facility_name']}</td>
        <td>{$row['type']}</td>
        <td>{$row['instr_name']}</td>
    </tr>";

    
}

echo "</table>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <form action="enrol.php" method="post">
        <label>Class to Enrol</label>
        <input type="text" name="enrollment"><br>
        <input type="submit" name="enrol" value="Enrol">
    </form>
    <br>
    <a href="logout.php">Logout
</body>
</html>
