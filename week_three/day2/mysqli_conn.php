<?php
$conn = mysqli_connect("localhost", "root", "", "test");

$id = 11;

$sql = "SELECT * FROM students WHERE id = ?";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo $row["email"];
} 
?>
