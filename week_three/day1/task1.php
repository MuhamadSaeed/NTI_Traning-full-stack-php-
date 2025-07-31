<?php
class Book {
    public $title;
    public $name;

    public function read() {
        echo "$this->name is reading $this->title rn";
    }
}

$book1 = new Book;
$book1->name = "ahmed";
$book1->title = "geting out of the context";
$book1->read();