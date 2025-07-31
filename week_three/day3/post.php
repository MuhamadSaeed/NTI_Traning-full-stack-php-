<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

include 'db.php';

$data = json_decode(file_get_contents('php://input'), true);

$name = $data['name'] ?? '';
$desc = $data['description'] ?? '';

if ($name === '' || $desc === '') {
    echo json_encode(['message' => 'title and email are req']);
    exit;
}

$stmt = $conn->prepare("INSERT INTO course (title, description) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $desc);

if ($stmt->execute()) {
    echo json_encode(['message' => 'added']);

} else {
    echo json_encode(['message' => 'error']);
}
?>
