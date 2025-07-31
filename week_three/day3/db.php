<?php

header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: POST");

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test';

$conn = new mysqli($host, $user, $password, $database);
?>
