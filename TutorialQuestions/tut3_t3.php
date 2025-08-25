<?php


if(isset($_GET["submit"])){
    $n = $_GET["dish"];
    $p = $_GET["price"];
    $duplicate = false;

    echo $n;
    echo $p;

    $menu = fopen("menu.txt", "r+");
    while(!feof($menu)){

        $line = fgetcsv($menu, 0, "|");
        list($name, $price) = $line;
        if($name == $n){
            $duplicate = true;
            break;
        }
    }

    fclose($menu);

    if ($duplicate == false){

        $menu = fopen("menu.txt", "a");
        fwrite($menu, "$n|$p\n");
        fclose($menu);
    }

}



if(isset($_GET["sort"])){

    $sort=$_GET["sortval"];



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
        <form action="tut3_t3.php" method="get">
            <label>Dish Name</label>
            <input type="text" name="dish"><br>
            <label>Price</label>
            <input type="text" name="price"><br>
            <input type="submit" name="submit">
        </form><br><hr>

        <form action="tut3_t3.php" method="get">
            <label>Sort</label>
            <select name="sortval" id="sortval">
                <option value="nsort">Name</option>
                <option value="psort">Price</option>
            </select>
            <input type ="submit" name="sort">
        </form><br>   








        <table border=1>

            <th>Name</th>
            <th>Price</th>
                <?php

                $menu = fopen("menu.txt", "r");
                while(!feof($menu)){
                    $line = fgetcsv($menu, 0, "|" );
                    list($name, $price) = $line;
                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo"<td>$price</td>";
                    echo "</tr>";
                }

                fclose($menu);
                
                ?>
        </table>

    </body>
</html>