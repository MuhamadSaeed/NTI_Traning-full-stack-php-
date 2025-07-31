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

$stmt = $conn->prepare("UPDATE students SET name = ?, email = ?, phone = ?, date = ? WHERE id = ?");
$stmt->bind_param("ssssi", $name, $email, $phone, $date, $id);

if ($stmt->execute()) {
    echo json_encode(["message" => "student updated"]);
} else {
    http_response_code(500);
    echo json_encode(["message" => "error"]);
}

$stmt->close();
$conn->close();
