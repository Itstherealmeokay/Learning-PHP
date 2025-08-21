<?php

session_start();
$username = $_SESSION["username"];
$subject = $_SESSION["subject"];
$answers = $_POST["answers"];
$questions = $_SESSION["questions"];

$overallscore = $_SESSION["overallscore"] ?? 0;
$quizscore = 0;
$correct = 0;
$incorrect = 0;

var_dump($answers);
var_dump($questions);
var_dump($overallscore);
if ($subject == "science"){

    foreach ($questions as $index => $question) {
    list($question_text, $option1, $option2, $option3, $answer) = explode("|", $question);
    $useranswer = $answers[$index] ?? 'No Answer';

    if ($useranswer == $answer) {
        $quizscore+=3;
        $correct++;
    } else {
        $quizscore-=2;
        $incorrect++;
    }

}
    
}else if ($subject == "math"){
    // Math is fill in the blanks
    foreach ($questions as $index => $question) {
        list($question_text, $answer) = explode("|", $question);
        $useranswer = $answers[$index] ?? 'No Answer';
        if (trim($useranswer) == trim($answer)) {
            $quizscore+=3;
            $correct++;
        } else {
            $quizscore-=2;
            $incorrect++;
        }
    }
}

$previousscore = $_SESSION["overallscore"] ?? 0;
$overallscore = $previousscore + $quizscore;
$_SESSION["overallscore"] = $overallscore;
var_dump($overallscore);

echo "Username: " . $username . "<br>";
echo "Subject: " . $subject . "<br>";
echo "Correct Answers: " . $correct . "<br>";
echo "Incorrect Answers: " . $incorrect . "<br>";
echo "Score: " . $quizscore . "<br>";
echo "Overallscore: " . $overallscore . "<br>";

//update leaderboard
$leaderboardFile = 'leaderboard.txt';
$leaderboard = file($leaderboardFile, FILE_IGNORE_NEW_LINES);

$found = false;
foreach($leaderboard as $index => $line){
    list($user, $score) = explode(":", $line);
    if (trim($user) == $username){
        $found = true;
        if ((int)$score < $overallscore){
            $leaderboard[$index] = $username . ":" . $overallscore;
        }
        break;
    }
}

if (!$found){
    $leaderboard[] = $username . ":" . $overallscore;
}

file_put_contents($leaderboardFile, implode("\n", $leaderboard));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="playagain.php" method="post">
        <select name="subject">
            <option value="math">Math</option>
            <option value="science">Science</option>
        </select>
        <button type="submit" name="submit">Play Again</button>
    </form>
    <button onclick="window.location.href = 'logout.php';">Logout</button>
    <button onclick="window.location.href = 'leaderboard.php';">Leaderboard</button>

</body>
</html>