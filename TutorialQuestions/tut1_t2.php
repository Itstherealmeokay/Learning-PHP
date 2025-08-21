<?php


//I realised the FahToCel thing later, just change if you want to 
//but it should work the same

function temp_convertC($f) {
    $f = $f - 32;
    $f = round($f * (5/9),1);

    return $f;
}

echo temp_convertC(100);

function temp_convertF($c) {
    $c = $c * (9/5);
    $c = round($c + 32,1);

    return $c;
}

$fahrenheight = array();
$celsius = array();

for ($i = 0; $i <= 100; $i++){
    array_push($fahrenheight, $i);
}

foreach($fahrenheight as $temp){
    $convert = temp_convertC($temp);
    array_push($celsius, $convert);
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
    <table border = "1">
        <th>Fahrenheight</th>
        <th>Celsius</th>
        <tr>
            <?php
            echo "<td>";
            foreach($fahrenheight as $temp){
                echo $temp . "<br>";
            }
            echo "</td>";
            echo "<td>";
            foreach($celsius as $temp){
                echo $temp . "<br>";
            }
            echo "</td>";
            ?>
        </tr>



    </table>
</body>
</html>