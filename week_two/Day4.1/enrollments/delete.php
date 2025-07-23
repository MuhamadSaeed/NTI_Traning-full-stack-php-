<?php
require '../db.php';

$id = $_GET['id'] ?? 0;

$stmt = $conn->prepare("DELETE FROM enrollments WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: select.php");
exit();
?>
