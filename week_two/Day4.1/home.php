<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

$role = $_SESSION['role'] == 1 ? 'admin' : 'user';
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>documnet </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body >
   <?php require "./navbar.html"; ?>

<div class="container">
    <div class="mb-4">
        <p>you are   <strong><?= $role ?></strong></p>
    </div>

</div>

</body>
</html>
