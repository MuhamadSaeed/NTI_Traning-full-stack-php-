<?php
session_start();
require_once '../db.php';

$data = json_decode(file_get_contents("php://input"), true);

$username = $data['username'] ?? '';
$email = $data['email'] ?? '';
$password = $data['password'] ?? '';

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = mysqli_prepare($conn, "INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);

if (mysqli_stmt_execute($stmt)) {
    echo json_encode(["message" => "signed up"]);
} else {
    http_response_code(500);
    echo json_encode(["message" => " something wrong"]);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
