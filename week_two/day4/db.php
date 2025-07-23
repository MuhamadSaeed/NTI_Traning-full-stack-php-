<?php
$conn = new mysqli("localhost", "root", "", "users");
if ($conn->connect_error) {
    die("conn failed: " . $conn->connect_error);
}
