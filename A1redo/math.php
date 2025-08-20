<h2>Math</h2>

<?php
session_start();

if (!isset($_SESSION["username"]) && !isset($_SESSION["subject"])){
    header("Location: index.php");
}

$username = $_SESSION["username"];
$subject = $_SESSION["subject"];
$filename = "math.txt";

$questions = file($filename, FILE_IGNORE_NEW_LINES);
shuffle($questions);
$selected_questions = array_slice($questions, 0, 2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="post">
        <?php
        foreach ($selected_questions as $question) {
            list($question_text, $answer) = explode("|", $question);
            echo "<label>$question_text</label>";
            echo "<input type='text' name='answer[]'>";
            echo "<br>";
        }
        ?>
        <input type="submit" value="Submit">
</body>
</html>
