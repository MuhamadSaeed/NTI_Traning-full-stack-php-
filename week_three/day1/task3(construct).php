<?php

class Course {
    public $title;
    public $instructor;
    private $description;

    public function __construct($title, $instructor, $description) {
        $this->title = $title;
        $this->instructor = $instructor;
        $this->description = $description;
    }

    public function describe() {
        echo "title: " . $this->title . "<br>";
        echo "instructor: " . $this->instructor . "<br>";
        echo "description: " . $this->description . "<br>";
    }
}

$course = new Course("web development", "ali", "learn html, css, js");

$course->describe();
?>
