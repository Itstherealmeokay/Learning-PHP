<?php

/*
for ($i =0; $i<=10; $i++){
    ${"arr" . $i} = array();
}

function randnum(){

    $x= array();
    for ($i = 0; $i<=3; $i++){
        array_push($x, rand(1,10));
    }
    return $x;
}

for ($i =0; $i<=10; $i++){

    ${"arr" . $i} = randnum();

}

*/

$arr1 = [4, 12, 7];
$arr2 = [9, 5, 2, 8];
$arr3 = [14, 33, 27, 5, 19];
$arr4 = [20, 30, 50];
$arr5 = [13, 25, 7, 9, 2, 18];
$arr6 = [3, 10, 12, 15];
$arr7 = [21, 8, 9, 7, 5];
$arr8 = [6, 17, 22, 14];
$arr9 = [1, 2, 3, 4, 5, 6];
$arr10 = [7, 14, 21];

$sum_array = array();
for ($i=1; $i<=10; $i++){
    array_push($sum_array, array_sum(${"arr" . $i}));
}

$prod_array = array();
for ($i=1; $i<=10; $i++){
    array_push($prod_array, array_product(${"arr" . $i}));
}

print_r($sum_array);
echo "<br>";

//Task 1 (1)
foreach ($sum_array as $n){

    if ($n == 100 || $n == 1000 || $n == 10000){

        echo $n;

    }

}
echo "<br>";
//-----------------------------------------


//Task 1 (2)

sort($sum_array);

print_r(array_splice($sum_array, 0, 3)); 

echo "<br>";



//-----------------------------------------------


//Task 1 (3)

//array_shift($sum_array);
//array_pop($sum_array);

echo "<br>";

//------------------------------------------------


//Task 1 (4)

array_push($prod_array, 42, 100, 50);
$count = 0;
foreach ($sum_array as $n){

    foreach($prod_array as $z){

        if($n == $z){

            $count++;
            echo $n . "<br>";
            
        }
        
    }
    

}
echo "Matches: $count";

echo"<br>";
echo"<br>";

//---------------------------------------------

//Task 1(5)

$m_array = array_merge($sum_array, $prod_array);
print_r($m_array);

echo"<br>";
echo"<br>";
//-------------------------------------------------


//Task 1 (6)

sort($m_array);
print_r($m_array);








echo "<hr>";
print_r($sum_array);
echo "<br>";
echo "<hr>";
print_r($prod_array);
?>