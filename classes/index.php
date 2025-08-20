<?php
class Person{
    public $name;
    public $age;
    public $gender;

    function __construct($name, $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    function introduce(){
        return "My name is {$this->name} and I am {$this->age} years old";
    }
}

class Pet extends Person{
    public $species;
    public $color;


    function __construct($name, $age, $gender, $species, $color){
        parent::__construct($name, $age, $gender);
        $this->species = $species;
        $this->color = $color;
    }
}


$cf = new Person("Ching Fong", 24, "male");
$harini = new Person ("Harini", 25, "female");
$snowball = new Pet("Snowball", 5, "male", "penguin", "white");

if (isset($_POST["submit"])){
    echo $cf->introduce();
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
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Action</th>

        <tr>
            <td><?php echo $cf->name; ?></td>
            <td><?php echo $cf->age; ?></td>
            <td><?php echo $cf->gender; ?></td>
            <td><form action = "index.php" method = "post"><input type = "submit" name = "submit" value = "Introduce"></form></td>
        </tr>

    </table>
</body>
</html>

 