<?php

class Employee {
    public $name;
    public $salary;
    public $bonus;

    public function printAllValues() {
        echo "name: " . $this->name . "<br>";
        echo "salary: " . $this->salary . "<br>";
        echo "bonus: " . $this->bonus . "<br>";
    }
}

$emp = new Employee();

$emp->name = "ahmed";

$emp->salary = "100";
$emp->bonus= "20";

$emp->printAllValues();