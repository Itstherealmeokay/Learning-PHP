<h2>Science</h2>
<?php
session_start();

if (!isset($_SESSION["username"]) && !isset($_SESSION["subject"])){
    header("Location: index.php");
}

$username = $_SESSION["username"];
$subject = $_SESSION["subject"];
$filename = "science.txt";

$questions = file($filename, FILE_IGNORE_NEW_LINES);
shuffle($questions);
$selected_questions = array_slice($questions, 0, 2);
$_SESSION['questions'] = $selected_questions;

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
        foreach ($selected_questions as $index => $question) {
            list($question_text, $option1, $option2, $option3, $answer) = explode("|", $question);
            echo "<label>$question_text</label><br>";
            echo "<label><input type='radio' name='answers[$index]' value='$option1'> $option1</label>";
            echo "<label><input type='radio' name='answers[$index]' value='$option2'> $option2</label>";
            echo "<label><input type='radio' name='answers[$index]' value='$option3'> $option3</label><br>";
            echo "<br>";
        }
        ?>
        <input type="submit" value="Submit">
</body>
</html>
