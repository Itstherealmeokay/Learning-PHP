<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "radio.php" method = "post">
        <input type="radio" name = "creditcard" value="Visa">Visa<br>
        <input type="radio" name = "creditcard" value="Mastercard">Mastercard<br>
        <input type="radio"  name = "creditcard" value="Amex">Amex<br>
        <input type="submit" name = "confirm" value="confirm">
        
    </form>
</body>
</html>


<?php
    if(isset($_POST["confirm"])){

        $credit_card = null; // to remove the warning

        if(isset($_POST["creditcard"])){
            $credit_card = $_POST["creditcard"];
            
        }

        switch($credit_card){
            case "Visa":
                echo "Visa selected";
                break;
            case "Mastercard":
                echo "Mastercard selected";
                break;
            case "Amex":
                echo "Amex selected";
                break;
            default:
                echo "No credit card selected";
        }
    }
    