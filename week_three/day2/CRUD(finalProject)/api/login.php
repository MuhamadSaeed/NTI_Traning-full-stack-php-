<?php
session_start();

require_once '../db.php'; 

$data = json_decode(file_get_contents("php://input"), true); 

$email = $data['email'] ?? '';
$password = $data['password'] ?? '';

$stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['name'];

    echo json_encode(["message" => "loged in"]);
} else {
    http_response_code(401);
    echo json_encode(["message" => "wrong try"]);
}

$stmt->close();
$conn->close();