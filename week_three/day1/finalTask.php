<?php

class Student {
    public $name;
    public $email;
    public $age;
    private $isActive = false;

    public function __construct($name, $email, $age) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    public function activate() {
        return $this->isActive = true;
    }

    public function getStatus() {
        return $this->isActive;
    }
}

$student = new Student("alo", "ali@h.com", 25);

echo "welcome " . $student->name;
echo "<br>";
echo "status: " . ($student->getStatus() ? "active" : "not active");
$status = $student->getStatus();


echo "<br> <hr>";


$student->activate();

echo "welcome " . $student->name;
echo "<br>";
echo "status: " . ($student->getStatus() ? "active" : "not active");
$status = $student->getStatus();
