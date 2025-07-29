<?php

abstract class Employee {
    abstract public function calcSalary();
}

class HourlyEmployee extends Employee {
    public $work_hours;
    public $ratePerHour;

    public function __construct($work_hours, $ratePerHour) {
        $this->work_hours = $work_hours;
        $this->ratePerHour = $ratePerHour;
    }

    public function calcSalary() {
        echo $this->work_hours * $this->ratePerHour;
    }
}

$employee = new HourlyEmployee(10, 5);
echo $employee->calcSalary();
