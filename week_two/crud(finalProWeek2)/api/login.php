<?php
session_start();

require_once '../db.php'; 

$data = json_decode(file_get_contents("php://input"), true); 

$email = $data['email'] ?? '';
$password = $data['password'] ?? '';

$stmt = mysqli_prepare($conn, "SELECT id, name, password FROM users WHERE email = ?");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['name'];

    echo json_encode(["message" => "loged in"]);
} else {
    http_response_code(401);
    echo json_encode(["message" => "wrong try"]);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
