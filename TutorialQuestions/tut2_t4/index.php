<?php
$fileName = "bowlerlist.txt";
$file = file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if(isset($_POST["add"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $average = $_POST["average"];
    $exist = false;

    foreach($file as $index => $line){

        list($name2, $age, $average) = explode("|", $line);

        if ($name == $name2) {
            $exist = TRUE;
            break;

        }
    }

    if ($exist === FALSE) {
        $file[] = "$name|$age|$average";
        file_put_contents($fileName, implode("\n", $file));

    }else{

        echo"$name already exists";
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
    <form action="index.php" method="post">
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Age</label>
        <input type="text" name="age"><br>
        <label>Average</label>
        <input type="text" name="average"><br>
        <input type="submit" name="add" value="add">
</form>
</body>
</html>