<?php

class Employee {
    public $name;
    public $salary;
    public $bonus;

    public function printAllValues() {
        echo "name: " . $this->name ;
        echo "salary: " . $this->salary ;
        echo "bonus: " . $this->bonus ;
    }
}

$emp = new Employee();

$emp->name = "ahmed";

$emp->salary = "100";
$emp->bonus= "20";

$emp->printAllValues();