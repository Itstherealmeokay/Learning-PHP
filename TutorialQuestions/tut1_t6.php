

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "tut1_t6.php" method = "post">
        <label>Mortgage</label><br>
        <input type="text" name="mortgage"><br>
        <label>Interest</label><br>
        <input type="text" name="interest"><br>
        <label>Years</label><br>
        <input type="text" name="years"><br>
        <input type="submit" name = "submit" value="Submit">
    </form>
</body>
</html>

<?php

if (isset($_POST["submit"])){

    $mortgage = $_POST["mortgage"];
    $interest = $_POST["interest"];
    $interest = $interest / 100;
    $rate = $interest / 12;
    $years = $_POST["years"];
    $payments = $years * 12;
    $monthly_pay = ($mortgage * $rate) / (1 - pow(1 + $rate, -$payments));
    echo "Monthly payment: $" . number_format($monthly_pay, 2);

}
?>