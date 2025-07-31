<?php
session_start();
require_once '../db.php';

if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(["message" => "login frist please"]);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'] ?? '';
$email = $data['email'] ?? '';
$phone = $data['phone'] ?? '';
$date = $data['date'] ?? '';

$stmt = mysqli_prepare($conn, "INSERT INTO students (name, email, phone, date) VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone, $date);

if (mysqli_stmt_execute($stmt)) {
    echo json_encode(["message" => "added"]);
} else {
    http_response_code(500);
    echo json_encode(["message" => "error"]);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
