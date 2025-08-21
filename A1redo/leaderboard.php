<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

$leaderboardFile = 'leaderboard.txt';
$leaderboard = file($leaderboardFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Add sort logic here
$sort = isset($_GET["sort"]) ? $_GET["sort"] : "score";

if ($sort === "score") {
    usort($leaderboard, function($a, $b) {
        list($userA, $scoreA) = array_map('trim', explode(":", $a));
        list($userB, $scoreB) = array_map('trim', explode(":", $b));
        return (int)$scoreB - (int)$scoreA; // Descending
    });
} elseif ($sort === "name") {
    usort($leaderboard, function($a, $b) {
        list($userA, $scoreA) = array_map('trim', explode(":", $a));
        list($userB, $scoreB) = array_map('trim', explode(":", $b));
        return strcasecmp($userA, $userB); // Ascending
    });
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
</head>
<body>
    <h3>Leaderboard</h3>
    <b>Sort by:</b>
    <a href="?sort=score">Score</a> |
    <a href="?sort=name">Name</a>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Score</th>
        </tr>
        <?php
        $rank = 1;
        foreach ($leaderboard as $line) {
            if (strpos($line, ":") === false) continue;
            list($user, $score) = array_map('trim', explode(":", $line));
            echo "<tr>";
            echo "<td>{$rank}</td>";
            echo "<td>" . htmlspecialchars($user) . "</td>";
            echo "<td>" . htmlspecialchars($score) . "</td>";
            echo "</tr>";
            $rank++;
        }
        ?>
    </table>

    <br>
    <button onclick="window.location.href = 'home.php';">Back to Home</button>
</body>
</html>
