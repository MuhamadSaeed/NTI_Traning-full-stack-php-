<?php

class Shape {
    public function draw() {
        echo "make shape";
    }
}

class Circle extends Shape {
    public function draw() {
        echo "make a circle";
    }
}

class Rectangle extends Shape {
    public function draw() {
        echo "make a rect";
    }
}

$shape = new Shape();
$circle = new Circle();
$rectangle = new Rectangle();

$circle->draw();     
$rectangle->draw(); 
$shape->draw();     
