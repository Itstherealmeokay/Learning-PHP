<?php
class Employee {

    private $eid;
    private $name;
    private $surname;
    private $position;
    private $unit;
    private $salary;

    public function __construct($eid, $name, $surname, $position, $unit, $salary) {

        $this -> eid = $eid;
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> position = $position;
        $this -> unit = $unit;
        $this -> salary = $salary;

    }

    public function __get($property){
        return $this->$property;
    }

    public function __set($property, $new){
        return $this->$property = $new;
    }

    public function display(){
        echo "Name: $this->name $this->surname<br>";
        echo "Position: $this->position<br>";
        echo "Unit: $this->unit<br>";
        echo "Salary:$$this->salary/month";

        

    }


}


$emp1 = new Employee(01, "Greg", "Goh", "Project Manager", "IT", 5000);
$emp2 = new Employee(02, "Alex", "Tan", "Janitor", "Housekeeping", 1500);

echo $emp1 ->eid . "<br>";
echo $emp1 ->surname. "<br>";
echo "<br>";

$emp1 -> display();
echo "<br>";
echo "<br>";
$emp2 -> display();







?>