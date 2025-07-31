<?php
session_start();
require_once '../db.php';

if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(["message" => "login frist please"]);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'] ?? null;

$name = $data['name'] ?? '';
$email = $data['email'] ?? '';
$phone = $data['phone'] ?? '';
$date = $data['date'] ?? '';

$stmt = mysqli_prepare($conn, "UPDATE students SET name = ?, email = ?, phone = ?, date = ? WHERE id = ?");
mysqli_stmt_bind_param($stmt, "ssssi", $name, $email, $phone, $date, $id);

if (mysqli_stmt_execute($stmt)) {
    echo json_encode(["message" => "student updated"]);
} else {
    http_response_code(500);
    echo json_encode(["message" => "error"]);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
