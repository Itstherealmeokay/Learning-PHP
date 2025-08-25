<?php

$array1 = [

    "Berlin" => ["Berlin" => 0, "Moscow" => 1907.99, "Paris" => 876.96, "Prague" => 280.34, "Rome" => 1181.67],
    "Prague" => ["Berlin" =>280.34, "Moscow"=>1664.04, "Paris" => 885.38, "Prague"=> 0, "Rome" => 922]


];

if(isset($_POST["calculate"])){

    $start = ucfirst($_POST["start"]);
    $end = ucfirst($_POST["end"]);


    $dist = $array1[$start][$end];
    $miles = $dist/1.609344;
    echo "The distance between $start and $end is {$dist}km or {$miles} miles";
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
    <form action="tut3_t4.php" method="post">
        <label>Start</label>
        <select name='start' id='start'>
            <option value='berlin'>Berlin</option>
            <option value='prague'>Prague</option>
        </select>
        <br>
        <label>End</label>
        <select name='end' id='end'>
            <option value='berlin'>Berlin</option>
            <option value='prague'>Prague</option>
        </select>
        <br><br>
        <input type="submit" name="calculate" value="calculate distance">
    </form>
</body>
</html>